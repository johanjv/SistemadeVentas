<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{asset('/img/avatar5.png')}}" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->name }}</p>
                    <!-- Status -->
                    <!-- <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('adminlte_lang::message.online') }}</a> -->
                   
                </div>
            </div>
        @endif

        <!-- search form (Optional) -->
        <!-- <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="{{ trans('adminlte_lang::message.search') }}..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form> -->
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header"><i class='glyphicon glyphicon-th-list'></i> &nbsp;&nbsp;MENU</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="{{ url('home') }}"><i class='fa fa-link'></i> <span>Inicio</span></a></li>
        @if (Auth::user()->tipo == 'admin')


<!-- Menu Administrar -->

            <li class="treeview">
                <a href="#"><i class='glyphicon glyphicon-wrench'></i> <span>Ventas</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#">Registrar Venta</a></li>
                    <li><a href="#">Listar Venta</a></li>
                    <br>
                </ul>
            </li>

<!-- Menu Administrar -->

        <li class="treeview">
                <a href="#"><i class='glyphicon glyphicon-wrench'></i> <span>Productos</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ action('ProductosController@index') }}">Registrar Productos</a></li>
                    <li><a href="{{ action('ProductosController@listar') }}">Listar Productos</a></li>
                    <br>
                </ul>
            </li>

<!-- Menu Administrar -->

            <li class="treeview">
                <a href="#"><i class='glyphicon glyphicon-wrench'></i> <span>Administrar</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ action('UsuariosController@index') }}">Registrar Usuario</a></li>
                    <li><a href="{{ action('UsuariosController@listar') }}">Listar Usuarios</a></li>
                    <br>
                </ul>
            </li>
        @endif
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
