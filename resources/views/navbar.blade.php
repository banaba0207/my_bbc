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
        </div>
            <!-- ブランド表示 -->
        <div class="navbar-header">
            <a class="navbar-brand">山口の掲示板</a>
        </div>
        <!-- メニュー -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <!-- 左寄せメニュー -->
            <ul class="nav navbar-nav">
                <li>{!! link_to_route('posts.index', '記事一覧') !!}</li>
                <li>{!! link_to_route('posts.create', '新規記事作成') !!}</li>
                <li>{!! link_to_route('posts.search', '記事検索') !!}</li>
            </ul>

        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
