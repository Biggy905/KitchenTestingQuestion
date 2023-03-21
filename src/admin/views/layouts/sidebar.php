<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <a class="brand-link">
       <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <div class="sidebar">

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-item">
                    <a href="<?= \yii\helpers\Url::to(['/1/12/books'])?>" class="nav-link">
                        <i class="nav-icon fas fa-people-carry"></i>
                        <p>
                            Пользователи
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= \yii\helpers\Url::to(['/1/12/users'])?>" class="nav-link">
                        <i class="nav-icon fas fa-file"></i>
                        <p>
                            Книги
                        </p>
                    </a>
                </li>
            </ul>
        </nav>

    </div>

</aside>