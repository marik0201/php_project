<nav class="navbar navbar-expand-lg navbar-light" style="background-color:#f9faf5">
    <a class="navbar-brand" href="/DBlog/newsPage/news.php"><img src="../logo.png" alt="Logo"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar1" aria-controls="navbar1"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbar1">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" id="news" href="/DBlog/newsPage/news.php">Новости</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="lessons" href="/DBlog/lessonsPage/lessons.php">Уроки</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="forum" href="/DBlog/forumPage/forum.php">Форум</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="liked" href="/DBlog/liked/liked.php">Понравилось</a>
            </li>
            <li class="nav-item right">
                <?php
                    include('header_account.php');
                ?>
            </li>
        </ul>
    </div>
</nav>

<script src="../js/header.js"></script>