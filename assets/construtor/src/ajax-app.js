const ServerInfo = React.createClass({
	loadData(){
		$.ajax({
			url: this.props.url,
			dataType: 'json',
			success: (data)=>{
				this.setState({data});
			}
		})
	},

	getInitialState(){
		return{
			data[]
		};
	},

	componentDidMount(){
		this.loadData();
	},

	
})