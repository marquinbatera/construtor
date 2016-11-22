const Props = React.createClass({
	getDefaultProps(){
		return{
			x: 'x',
			y: 'y'
		};
	},

	render(){
		return(
			React.createElement('div', Object.assign({}, this.props),'Valor del div')
		);
	}
});

const App = React.createClass({
	render(){
		return(
			<Props x="override value" />
		);
	}
});

ReactDOM.render(<App />, document.getElementById('props'));