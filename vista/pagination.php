<div class="container">
    <div class="row">
        <div class="col-md-12">
            <ul class="pagination justify-content-center">
                <li class="page-item <?php echo ($pagina == $min_page) ? 'disabled' : ''; ?>">
                    <a class="page-link" href="?c=Personajes&a=Listar&pagina=<?php echo $prev_page; ?>" tabindex="-1"
                        aria-disabled="true">Anterior</a>
                </li>
                <?php if ($pagina > 2): ?>
                    <li class="page-item">
                        <a class="page-link" href="?c=Personajes&a=Listar&pagina=<?php echo $min_page; ?>">
                            <?php echo $min_page; ?>
                        </a>
                    </li>
                <?php endif; ?>
                <?php for ($i = $start_page; $i <= $end_page; $i++): ?>
                    <li class="page-item <?php echo ($i == $pagina) ? 'active' : ''; ?>">
                        <a class="page-link" href="?c=Personajes&a=Listar&pagina=<?php echo $i; ?>">
                            <?php echo $i; ?>
                        </a>
                    </li>
                <?php endfor; ?>
                <?php if ($pagina <= ($max_page - 2)): ?>
                    <li class="page-item">
                        <a class="page-link" href="?c=Personajes&a=Listar&pagina=<?php echo $max_page; ?>">
                            <?php echo $max_page; ?>
                        </a>
                    </li>
                <?php endif; ?>
                <li class="page-item <?php echo ($pagina == $max_page) ? 'disabled' : ''; ?>">
                    <a class="page-link" href="?c=Personajes&a=Listar&pagina=<?php echo $next_page; ?>">Siguiente</a>
                </li>
            </ul>
        </div>
    </div>
</div>