class Post extends React.Component {
    state = { loading: true }
    loadData = () => this.setState({ loading: false })
    unloadData = () => this.setState({ loading: true })
    render() {
        const { loading } = this.state;
        const { postObject } = this.props;
        const className = loading ? 'post post-loading' : 'post';
        return (
            <div className={className} onMouseEnter={this.loadData} onMouseLeave={this.unloadData}>
                {Header(loading, postObject.user.profilePicture, postObject.user.tag)}
                {Picture(loading, postObject.picture)}
                {Reactions(loading)}
                {Likes(loading, 235)}
                {Caption(loading, postObject.user.tag, postObject.caption)}
                {PublicationDate(loading, postObject.publicationDate)}
            </div>
        );
    }
}

const HeaderPicture = (loading, src) => {
    if (loading) {
        return <div className="header-picture-loading"></div>;
    } else {
        return <img src={src} className="header-picture" />;
    }
}

const HeaderTag = (loading, tag) => {
    const className = loading ? 'header-tag header-tag-loading' : 'header-tag';
    return <span className={className}>{tag}</span>;
}

const HeaderMore = (loading) => {
    let className = 'header-more';
    className = loading ? className + ' header-more-loading' : className;
    className += ' fas fa-ellipsis-v';
    return <i className={className}></i>;
}

const Header = (loading, picture, tag) => {
    return (
        <div className="header">
            {HeaderPicture(loading, picture)}
            {HeaderTag(loading, tag)}
            {HeaderMore(loading)}
        </div>
    );
}

const Picture = (loading, src) => {
    if (loading) {
        return (
            <div className="picture-loading">
                {Loader(loading)}
            </div>
        );
    } else {
        return <img className="picture" src={src} />;
    }
}

const Loader = (loading) => {
    const className = loading ? 'loader' : 'loading-done';
    return <div className={className}></div>;
}

const Reactions = (loading) => {
    const heartClassName = loading ? 'fas fa-heart fas-loading' : 'fas fa-heart'; 
    const commentClassName = loading ? 'fas fa-comment fas-loading' : 'fas fa-comment'; 
    const paperPlaneClassName = loading ? 'fas fa-paper-plane fas-loading' : 'fas fa-paper-plane'; 
    const bookmarkClassName = loading ? 'fas fa-bookmark fas-loading' : 'fas fa-bookmark'; 
    return (
        <div className="reactions">
            <i className={heartClassName}></i> 
            <i className={commentClassName}></i> 
            <i className={paperPlaneClassName}></i> 
            <i className={bookmarkClassName}></i>
        </div>
    );
}

const Likes = (loading, likesNumber) => {
    if (loading) {
        return <div className="likes-loading"></div>;
    } else {
        return <div className="likes">{likesNumber} likes</div>;
    }
}

const Caption = (loading, tag, caption) => {
    if (loading) {
        return <div className="caption-loading"></div>;
    } else {
        return (
            <div className="caption">
                <span className="caption-tag">{tag}</span> {caption}
            </div>
        );
    }
}

const PublicationDate = (loading, date) => {
    if (loading) {
        return <div className="publication-date-loading"></div>;
    } else {
        return <div className="publication-date">{date}</div>;
    }
}

const postObject = {
    caption: 'Hey guys!',
    likes: 235,
    picture: 'https://s3-us-west-2.amazonaws.com/s.cdpn.io/718469/201042833-ca0d5369-7172-40bf-8b7f-349e18bfc0f3__01.jpg',
    publicationDate: '8 min ago',
    user: {
        tag: 'theamazingspidy',
        profilePicture: 'https://s3-us-west-2.amazonaws.com/s.cdpn.io/718469/spidyyy.png'
    }    
}

ReactDOM.render(<Post postObject={postObject} />, document.getElementById('root'))