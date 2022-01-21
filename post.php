<?php
include_once('./templates/header.php');

if (isset($_GET['id'])) {
    $postId = $_GET['id'];

    $currentPost;

    foreach ($posts as $post) {
        if ($post['id'] == $postId) {
            $currentPost = $post;
        }
    }
}
?>
<main id="post-container">
    <div class="content-container">
        <h1 id="main-title"><?= $currentPost['title'] ?></h1>
        <p id="post-description"><?= $currentPost['description'] ?></p>
        <div class="img-container">
            <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
        </div>
        <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis possimus sed non veniam nisi maiores expedita nihil omnis animi fugiat? Corporis cum illum quos doloremque quod optio dignissimos asperiores necessitatibus.
            Animi delectus, quasi tempora aperiam asperiores corporis voluptates odit qui ut. Molestias hic distinctio modi, quo inventore officiis quibusdam autem error nisi excepturi animi quisquam amet incidunt tempora iusto dolor.
            Voluptatibus laborum dicta, nihil reiciendis ea deleniti facere, dolorum nisi voluptatem maxime delectus sit animi porro similique totam culpa nobis optio laboriosam distinctio sapiente dolores doloremque mollitia rerum alias. Recusandae.
            Culpa voluptatum, vitae deleniti amet ipsam earum explicabo saepe odio inventore aliquam ipsa officia rem? Vitae quisquam reprehenderit quia excepturi aspernatur eveniet aperiam ducimus a aliquid, tempora obcaecati nihil sit?
            Necessitatibus, nemo neque accusantium doloribus sint incidunt alias, nulla ullam ea saepe amet laborum mollitia explicabo voluptas. Earum minus minima nam eius repellendus tenetur, est aperiam a, sapiente eveniet rerum?</p>
    </div>
    <aside id="nav-container">
        <h3 id="tags-title">Tags</h3>
        <ul id="tag-list">
            <?php foreach ($currentPost['tags'] as $tag) : ?>
                <li>
                    <a href="#"><?= $tag ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
        <h3 id="categories-title"> Categorias</h3>
        <ul id="categories-list">
            <?php foreach ($categories as $category) : ?>
                <li>
                    <a href="#"><?= $category ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
    </aside>
</main>

<?php
include_once('./templates/footer.php');
?>