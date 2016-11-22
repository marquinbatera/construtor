const LikeButton = React.createClass({
	getInitialState: function(){
		return {
			liked: false
		};
	},
	onUserClick: function(){
		this.setState({
			liked: !this.state.liked
		});
	},
	render: function(){
		const text = this.state.liked ? 'Me gusta' : 'ya no me gusta';
		return(
			<p onClick={this.onUserClick}>
				{text}, pulsa para cambiar
			</p>
		)
	}
});

ReactDOM.render(<LikeButton />, document.getElementById('like-button'));