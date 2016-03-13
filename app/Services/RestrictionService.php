<?php namespace BookStack\Services;

use BookStack\Entity;

class RestrictionService
{

    protected $userRoles;
    protected $isAdmin;
    protected $currentAction;
    protected $currentUser;

    /**
     * RestrictionService constructor.
     */
    public function __construct()
    {
        $this->currentUser = auth()->user();
        $this->userRoles = $this->currentUser ? $this->currentUser->roles->pluck('id') : [];
        $this->isAdmin = $this->currentUser ? $this->currentUser->hasRole('admin') : false;
    }

    /**
     * Checks if an entity has a restriction set upon it.
     * @param Entity $entity
     * @param $action
     * @return bool
     */
    public function checkIfEntityRestricted(Entity $entity, $action)
    {
        if ($this->isAdmin) return true;
        $this->currentAction = $action;
        $baseQuery = $entity->where('id', '=', $entity->id);
        if ($entity->isA('page')) {
            return $this->pageRestrictionQuery($baseQuery)->count() > 0;
        } elseif ($entity->isA('chapter')) {
            return $this->chapterRestrictionQuery($baseQuery)->count() > 0;
        } elseif ($entity->isA('book')) {
            return $this->bookRestrictionQuery($baseQuery)->count() > 0;
        }
        return false;
    }

    /**
     * Add restrictions for a page query
     * @param $query
     * @param string $action
     * @return mixed
     */
    public function enforcePageRestrictions($query, $action = 'view')
    {
        // Prevent drafts being visible to others.
        $query = $query->where(function ($query) {
            $query->where('draft', '=', false);
            if ($this->currentUser) {
                $query->orWhere(function ($query) {
                    $query->where('draft', '=', true)->where('created_by', '=', $this->currentUser->id);
                });
            }
        });

        if ($this->isAdmin) return $query;
        $this->currentAction = $action;
        return $this->pageRestrictionQuery($query);
    }

    /**
     * The base query for restricting pages.
     * @param $query
     * @return mixed
     */
    private function pageRestrictionQuery($query)
    {
        return $query->where(function ($parentWhereQuery) {

            $parentWhereQuery
                // (Book & chapter & page) or (Book & page & NO CHAPTER) unrestricted
                ->where(function ($query) {
                    $query->where(function ($query) {
                        $query->whereExists(function ($query) {
                            $query->select('*')->from('chapters')
                                ->whereRaw('chapters.id=pages.chapter_id')
                                ->where('restricted', '=', false);
                        })->whereExists(function ($query) {
                            $query->select('*')->from('books')
                                ->whereRaw('books.id=pages.book_id')
                                ->where('restricted', '=', false);
                        })->where('restricted', '=', false);
                    })->orWhere(function ($query) {
                        $query->where('restricted', '=', false)->where('chapter_id', '=', 0)
                            ->whereExists(function ($query) {
                                $query->select('*')->from('books')
                                    ->whereRaw('books.id=pages.book_id')
                                    ->where('restricted', '=', false);
                            });
                    });
                })
                // Page unrestricted, Has no chapter & book has accepted restrictions
                ->orWhere(function ($query) {
                    $query->where('restricted', '=', false)
                        ->whereExists(function ($query) {
                            $query->select('*')->from('chapters')
                                ->whereRaw('chapters.id=pages.chapter_id');
                        }, 'and', true)
                        ->whereExists(function ($query) {
                            $query->select('*')->from('books')
                                ->whereRaw('books.id=pages.book_id')
                                ->whereExists(function ($query) {
                                    $this->checkRestrictionsQuery($query, 'books', 'Book');
                                });
                        });
                })
                // Page unrestricted, Has an unrestricted chapter & book has accepted restrictions
                ->orWhere(function ($query) {
                    $query->where('restricted', '=', false)
                        ->whereExists(function ($query) {
                            $query->select('*')->from('chapters')
                                ->whereRaw('chapters.id=pages.chapter_id')->where('restricted', '=', false);
                        })
                        ->whereExists(function ($query) {
                            $query->select('*')->from('books')
                                ->whereRaw('books.id=pages.book_id')
                                ->whereExists(function ($query) {
                                    $this->checkRestrictionsQuery($query, 'books', 'Book');
                                });
                        });
                })
                // Page unrestricted, Has a chapter with accepted permissions
                ->orWhere(function ($query) {
                    $query->where('restricted', '=', false)
                        ->whereExists(function ($query) {
                            $query->select('*')->from('chapters')
                                ->whereRaw('chapters.id=pages.chapter_id')
                                ->where('restricted', '=', true)
                                ->whereExists(function ($query) {
                                    $this->checkRestrictionsQuery($query, 'chapters', 'Chapter');
                                });
                        });
                })
                // Page has accepted permissions
                ->orWhereExists(function ($query) {
                    $this->checkRestrictionsQuery($query, 'pages', 'Page');
                });
        });
    }

    /**
     * Add on permission restrictions to a chapter query.
     * @param $query
     * @param string $action
     * @return mixed
     */
    public function enforceChapterRestrictions($query, $action = 'view')
    {
        if ($this->isAdmin) return $query;
        $this->currentAction = $action;
        return $this->chapterRestrictionQuery($query);
    }

    /**
     * The base query for restricting chapters.
     * @param $query
     * @return mixed
     */
    private function chapterRestrictionQuery($query)
    {
        return $query->where(function ($parentWhereQuery) {

            $parentWhereQuery
                // Book & chapter unrestricted
                ->where(function ($query) {
                    $query->where('restricted', '=', false)->whereExists(function ($query) {
                        $query->select('*')->from('books')
                            ->whereRaw('books.id=chapters.book_id')
                            ->where('restricted', '=', false);
                    });
                })
                // Chapter unrestricted & book has accepted restrictions
                ->orWhere(function ($query) {
                    $query->where('restricted', '=', false)
                        ->whereExists(function ($query) {
                            $query->select('*')->from('books')
                                ->whereRaw('books.id=chapters.book_id')
                                ->whereExists(function ($query) {
                                    $this->checkRestrictionsQuery($query, 'books', 'Book');
                                });
                        });
                })
                // Chapter has accepted permissions
                ->orWhereExists(function ($query) {
                    $this->checkRestrictionsQuery($query, 'chapters', 'Chapter');
                });
        });
    }

    /**
     * Add restrictions to a book query.
     * @param $query
     * @param string $action
     * @return mixed
     */
    public function enforceBookRestrictions($query, $action = 'view')
    {
        if ($this->isAdmin) return $query;
        $this->currentAction = $action;
        return $this->bookRestrictionQuery($query);
    }

    /**
     * The base query for restricting books.
     * @param $query
     * @return mixed
     */
    private function bookRestrictionQuery($query)
    {
        return $query->where(function ($parentWhereQuery) {
            $parentWhereQuery
                ->where('restricted', '=', false)
                ->orWhere(function ($query) {
                    $query->where('restricted', '=', true)->whereExists(function ($query) {
                        $this->checkRestrictionsQuery($query, 'books', 'Book');
                    });
                });
        });
    }

    /**
     * Filter items that have entities set a a polymorphic relation.
     * @param $query
     * @param string $tableName
     * @param string $entityIdColumn
     * @param string $entityTypeColumn
     * @return mixed
     */
    public function filterRestrictedEntityRelations($query, $tableName, $entityIdColumn, $entityTypeColumn)
    {
        if ($this->isAdmin) return $query;
        $this->currentAction = 'view';
        $tableDetails = ['tableName' => $tableName, 'entityIdColumn' => $entityIdColumn, 'entityTypeColumn' => $entityTypeColumn];
        return $query->where(function ($query) use ($tableDetails) {
            $query->where(function ($query) use (&$tableDetails) {
                $query->where($tableDetails['entityTypeColumn'], '=', 'BookStack\Page')
                    ->whereExists(function ($query) use (&$tableDetails) {
                        $query->select('*')->from('pages')->whereRaw('pages.id=' . $tableDetails['tableName'] . '.' . $tableDetails['entityIdColumn'])
                            ->where(function ($query) {
                                $this->pageRestrictionQuery($query);
                            });
                    });
            })->orWhere(function ($query) use (&$tableDetails) {
                $query->where($tableDetails['entityTypeColumn'], '=', 'BookStack\Book')->whereExists(function ($query) use (&$tableDetails) {
                    $query->select('*')->from('books')->whereRaw('books.id=' . $tableDetails['tableName'] . '.' . $tableDetails['entityIdColumn'])
                        ->where(function ($query) {
                            $this->bookRestrictionQuery($query);
                        });
                });
            })->orWhere(function ($query) use (&$tableDetails) {
                $query->where($tableDetails['entityTypeColumn'], '=', 'BookStack\Chapter')->whereExists(function ($query) use (&$tableDetails) {
                    $query->select('*')->from('chapters')->whereRaw('chapters.id=' . $tableDetails['tableName'] . '.' . $tableDetails['entityIdColumn'])
                        ->where(function ($query) {
                            $this->chapterRestrictionQuery($query);
                        });
                });
            });
        });
    }

    /**
     * Filters pages that are a direct relation to another item.
     * @param $query
     * @param $tableName
     * @param $entityIdColumn
     * @return mixed
     */
    public function filterRelatedPages($query, $tableName, $entityIdColumn)
    {
        if ($this->isAdmin) return $query;
        $this->currentAction = 'view';
        $tableDetails = ['tableName' => $tableName, 'entityIdColumn' => $entityIdColumn];
        return $query->where(function ($query) use (&$tableDetails) {
            $query->where(function ($query) use (&$tableDetails) {
                $query->whereExists(function ($query) use (&$tableDetails) {
                    $query->select('*')->from('pages')->whereRaw('pages.id=' . $tableDetails['tableName'] . '.' . $tableDetails['entityIdColumn'])
                        ->where(function ($query) {
                            $this->pageRestrictionQuery($query);
                        });
                })->orWhere($tableDetails['entityIdColumn'], '=', 0);
            });
        });
    }

    /**
     * The query to check the restrictions on an entity.
     * @param $query
     * @param $tableName
     * @param $modelName
     */
    private function checkRestrictionsQuery($query, $tableName, $modelName)
    {
        $query->select('*')->from('restrictions')
            ->whereRaw('restrictions.restrictable_id=' . $tableName . '.id')
            ->where('restrictions.restrictable_type', '=', 'BookStack\\' . $modelName)
            ->where('restrictions.action', '=', $this->currentAction)
            ->whereIn('restrictions.role_id', $this->userRoles);
    }


}