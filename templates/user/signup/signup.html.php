<?php $title = "Signup" ?>

<?php
include './../templates/head.html.php';
?>
    <main>

        <form class="container" method="post" action="">
            <div class="row">
                <h1 class="col-12"><?= $title ?></h1>
            </div>
            <div class="row">
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input value="<?= filter_var($form["email"] ["value"], FILTER_SANITIZE_FULL_SPECIAL_CHARS) ?>"
                           type="text"
                           class="form-control"
                           id="email"
                           aria-describedby="emailHelp"
                           name="email">
                    <?php if ($form["email"] ["error"]) : ?>
                        <div class="text-danger"> <?= $form["email"] ["error"] ?></div>
                    <?php endif ?>

                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input value="<?= filter_var($form["password"] ["value"], FILTER_SANITIZE_FULL_SPECIAL_CHARS) ?>"
                           type="password"
                           class="form-control"
                           id="password" name="password">
                    <?php if ($form["password"] ["error"]) : ?>
                        <div class="text-danger"> <?= $form["password"] ["error"] ?></div>
                    <?php endif ?>


                </div>
                <div class="mb-3">
                    <label for="confirm" class="form-label">Confirm</label>
                    <input value="<?= filter_var($form["confirm"] ["value"], FILTER_SANITIZE_FULL_SPECIAL_CHARS) ?>"
                           type="password"
                           class="form-control" id="confirm" name="confirm">
                    <?php if ($form["confirm"] ["error"]) : ?>
                        <div class="text-danger"> <?= $form["confirm"] ["error"] ?></div>
                    <?php endif ?>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>

    </main>
<?php include './../templates/footer.html.php'; ?>