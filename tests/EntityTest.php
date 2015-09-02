<?php

class EntityTest extends TestCase
{

    public function testEntityCreation()
    {

        // Test Creation
        $book = $this->bookCreation();
        $chapter = $this->chapterCreation($book);
        $page = $this->pageCreation($chapter);

        // Test Updating
        $book = $this->bookUpdate($book);

        // Test Deletion
        $this->bookDelete($book);
    }

    public function bookDelete(\Oxbow\Book $book)
    {
        $this->asAdmin()
            ->visit($book->getUrl())
            // Check link works correctly
            ->click('Delete')
            ->seePageIs($book->getUrl() . '/delete')
            // Ensure the book name is show to user
            ->see($book->name)
            ->press('Confirm')
            ->seePageIs('/books')
            ->notSeeInDatabase('books', ['id' => $book->id]);
    }

    public function bookUpdate(\Oxbow\Book $book)
    {
        $newName = $book->name . ' Updated';
        $this->asAdmin()
            // Go to edit screen
            ->visit($book->getUrl() . '/edit')
            ->see($book->name)
            // Submit new name
            ->type($newName, '#name')
            ->press('Save Book')
            // Check page url and text
            ->seePageIs($book->getUrl() . '-updated')
            ->see($newName);

        return \Oxbow\Book::find($book->id);
    }

    public function pageCreation($chapter)
    {
        $page = factory(\Oxbow\Page::class)->make([
            'name' => 'My First Page'
        ]);

        $this->asAdmin()
            // Navigate to page create form
            ->visit($chapter->getUrl())
            ->click('New Page')
            ->seePageIs($chapter->getUrl() . '/create-page')
            // Fill out form
            ->type($page->name, '#name')
            ->type($page->html, '#html')
            ->press('Save Page')
            // Check redirect and page
            ->seePageIs($chapter->book->getUrl() . '/page/my-first-page')
            ->see($page->name);

        $page = \Oxbow\Page::where('slug', '=', 'my-first-page')->where('chapter_id', '=', $chapter->id)->first();
        return $page;
    }

    public function chapterCreation(\Oxbow\Book $book)
    {
        $chapter = factory(\Oxbow\Chapter::class)->make([
            'name' => 'My First Chapter'
        ]);

        $this->asAdmin()
            // Navigate to chapter create page
            ->visit($book->getUrl())
            ->click('New Chapter')
            ->seePageIs($book->getUrl() . '/chapter/create')
            // Fill out form
            ->type($chapter->name, '#name')
            ->type($chapter->description, '#description')
            ->press('Save Chapter')
            // Check redirect and landing page
            ->seePageIs($book->getUrl() . '/chapter/my-first-chapter')
            ->see($chapter->name)->see($chapter->description);

        $chapter = \Oxbow\Chapter::where('slug', '=', 'my-first-chapter')->where('book_id', '=', $book->id)->first();
        return $chapter;
    }

    public function bookCreation()
    {
        $book = factory(\Oxbow\Book::class)->make([
            'name' => 'My First Book'
        ]);
        $this->asAdmin()
            ->visit('/books')
            // Choose to create a book
            ->click('Add new book')
            ->seePageIs('/books/create')
            // Fill out form & save
            ->type($book->name, '#name')
            ->type($book->description, '#description')
            ->press('Save Book')
            // Check it redirects correctly
            ->seePageIs('/books/my-first-book')
            ->see($book->name)->see($book->description);

        $book = \Oxbow\Book::where('slug', '=', 'my-first-book')->first();
        return $book;
    }


}
