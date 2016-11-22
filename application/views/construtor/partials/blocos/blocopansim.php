<div id="blocopansim" class="modif content">
	<button type="button" class="btn btn-danger btn-sm pull-right animated fadeInLeft btnEdicao" onclick="abroMenu(\'.panelsimples\')">
		<span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
	</button>
	<a href="javascript:" class="btn btn-danger btn-sm pull-right animated fadeInLeft fecharConteudo" id="edicao1">X</a>
	<div id="panelsimples" class="modif panelsimples editavel panel panel-primary resize-drag">
		<button type="button" class="btn btn-danger btn-sm pull-right animated fadeInLeft btnEdicao" onclick="abroMenu(\'.headpansim\')">
			<span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
		</button>
		<div id="headpansim" class="modif headpansim editavel panel-heading">
			<h3 class="panel-title">Panel primary</h3>
		</div>
		<div id="bodypansim" class="modif bodypansim editavel panel-body">
			<button type="button" class="btn btn-danger btn-sm pull-right animated fadeInLeft btnEdicao" onclick="abroMenu(\'.bodypansim\')">
				<span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
			</button>
			Panel content
		</div>
	</div>
</div>