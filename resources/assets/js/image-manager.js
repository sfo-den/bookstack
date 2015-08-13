
(function() {


    class ImageManager extends React.Component {

        constructor(props) {
            super(props);
            this.state = {
                images: [],
                hasMore: false,
                page: 0
            };
        }

        show(callback) {
            $(React.findDOMNode(this)).show();
            this.callback = callback;
        }

        hide(e) {
            console.log('test');
            $(React.findDOMNode(this)).hide();
        }

        selectImage(image) {
            if(this.callback) {
                this.callback(image);
            }
            this.hide();
        }

        componentDidMount() {
            var _this = this;
            // Set initial images
            $.getJSON('/images/all', data => {
                this.setState({
                    images: data.images,
                    hasMore: data.hasMore
                });
            });
            // Create dropzone
            this.dropZone = new Dropzone(React.findDOMNode(this.refs.dropZone), {
                url: '/upload/image',
                init: function() {
                    var dz = this;
                    this.on("sending", function(file, xhr, data) {
                        data.append("_token", document.querySelector('meta[name=token]').getAttribute('content'));
                    });
                    this.on("success", function(file, data) {
                        _this.state.images.unshift(data);
                        _this.setState({
                            images: _this.state.images
                        });
                        //$(file.previewElement).fadeOut(400, function() {
                        //    dz.removeFile(file);
                        //})
                    });
                }
            });
        }

        loadMore() {
            this.state.page++;
            $.getJSON('/images/all/' + this.state.page, data => {
                this.setState({
                    images: this.state.images.concat(data.images),
                    hasMore: data.hasMore
                });
            });
        }

        render() {
            var loadMore = this.loadMore.bind(this);
            var selectImage = this.selectImage.bind(this);
            var hide = this.hide.bind(this);
            return (
                <div className="overlay" onClick={hide}>
                    <div id="image-manager">
                        <div className="image-manager-content">
                            <div className="dropzone-container" ref="dropZone">
                                <div className="dz-message">Drop files or click here to upload</div>
                            </div>
                            <ImageList data={this.state.images} loadMore={loadMore} selectImage={selectImage} hasMore={this.state.hasMore}/>
                        </div>
                        <div className="image-manager-sidebar">
                            <button className="neg button image-manager-close" onClick={hide}>x</button>
                            <h2>Images</h2>
                        </div>
                    </div>
                </div>
            );
        }

    }

    class ImageList extends React.Component {

        render() {
            var selectImage = this.props.selectImage;
            var images = this.props.data.map(function(image) {
                return (
                    <Image key={image.id} image={image} selectImage={selectImage} />
                );
            });
            return (
                <div className="image-manager-list clearfix">
                    {images}
                    { this.props.hasMore ? <div className="load-more" onClick={this.props.loadMore}>Load More</div> : null }
                </div>
            );
        }

    }

    class Image extends React.Component {

        constructor(){
            super();
            this._dblClickTime = 160;
            this._cClickTime = 0;
        }

        setImage() {
            this.props.selectImage(this.props.image);
        }

        imageClick() {
            var cTime = (new Date()).getTime();
            var timeDiff = cTime - this._cClickTime;
            console.log(timeDiff);
            if(this._cClickTime !== 0 && timeDiff < this._dblClickTime) {
                // DoubleClick
                this.setImage();
            } else {
                // Single Click
            }
            this._cClickTime = cTime;
        }

        render() {
            var imageClick = this.imageClick.bind(this);
            return (
                <div>
                    <img onDoubleClick={imageClick} src={this.props.image.thumbnail}/>
                </div>
            );
        }

    }

    class ImageInfoPage extends React.Component {

        render() {

        }

    }

    if(document.getElementById('image-manager-container')) {
        window.ImageManager = React.render(
            <ImageManager />,
            document.getElementById('image-manager-container')
        );
    }

})();


