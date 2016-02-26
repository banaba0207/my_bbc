{{-- resouces/views/navbar.blade.php --}}

<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <!-- スマホやタブレットで表示した時のメニューボタン -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- ブランド表示 -->
            <a class="navbar-brand" href="/public">My Blog</a>
        </div>

        <!-- メニュー -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <!-- 左寄せメニュー -->
            <ul class="nav navbar-nav">
                <li>{!! link_to_route('posts.index', '記事一覧') !!}</li>
                <li>{!! link_to_route('posts.create', '新規記事作成') !!}</li>
                <li><a href="/contact">Contact</a></li>
                <li><a href="/about">About</a></li>
            </ul>

            <!-- 右寄せメニュー -->
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Login</a></li>
                <li><a href="#">Register</a></li>

                <!-- ドロップダウンメニュー -->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">User Name <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Profile</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
