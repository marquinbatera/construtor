<div class="container-fluid">
<div class="row">
    <nav class="navbar navbar-fixed-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
            <!-- <form role="search" class="navbar-form-custom" action="search_results.html">
                <div class="form-group">
                    <input type="text" placeholder="Search for something..." class="form-control" name="top-search" id="top-search">
                </div>
            </form> -->
        </div>
        <ul class="nav navbar-top-links navbar-right">
            <li>
                <select class="form-control" id="mudaPagina">
                    <option value="welcome/index" <?php echo ($pagina == 'home') ? 'selected' : ''; ?>>home</option>
                    <option value="welcome/sobre" <?php echo ($pagina == 'sobre') ? 'selected' : ''; ?>>sobre</option>
                    <option value="welcome/grid" <?php echo ($pagina == 'grid') ? 'selected' : ''; ?>>produtos</option>
                    <option value="welcome/detalhe" <?php echo ($pagina == 'detalhe') ? 'selected' : ''; ?>>descrição</option>
                    <option value="welcome/carrinho" <?php echo ($pagina == 'carrinho') ? 'selected' : ''; ?>>carrinho</option>
                    <option value="welcome/contato" <?php echo ($pagina == 'contato') ? 'selected' : ''; ?>>contato</option>
                </select>
            </li>
            <li>
                <button class="btn btn-info btn-block" id="saveStyleTemplate" onclick="mostrar()">Salvar</button>
            </li>
            <a class="btn btn-success btn-sm" id="publicTemplate" target="blank" href="<?php echo ($pagina == 'home') ? base_url('visual/index') : base_url('visual/').$pagina; ?>">Visualizar</a>
            <li>
                <span class="m-r-sm text-muted welcome-message">Bem vido ao gerenciador de lojas virtuais.</span>
            </li>
          
            <li>
                <a href="<?php echo base_url('auth/logout'); ?>">
                    <i class="fa fa-sign-out"></i> Sair
                </a>
            </li>
        </ul>

    </nav>
</div>
</div>