<?php require_once("./__init__.php") ?>

<?php include('./templates/header.php'); ?>

<section class="hero is-success is-halfheight pokebaner">
    <div class="hero-body">
        <h1 class="title">PokeDB</h1>
    </div>
</section>

<!-- https://bulma.io/documentation/layout/tiles/ -->
<main class="section">
    <div class="tile is-ancestor">
        <div class="tile is-parent">
            <div class="tile is-child box">
                <h2 class="title">Consultar Base de datos</h2>
                <form  action='./queries/bdd1.php' method='GET'>
                    <input class='button is-success' type='submit' value='Consultar'>
                </form>
            </div>
        </div>
        <div class="tile is-parent">
            <div class="tile is-child box">
                <h2 class="title">Consultar Base de datos</h2>
                <form  action='./queries/bdd1.php' method='GET'>
                    <input class='button is-success' type='submit' value='Consultar'>
                </form>
            </div>
        </div>
    </div>
    <div class="tile is-ancestor">
        <div class="tile is-parent">
            <div class="tile is-child box">
                <h2 class="title">Consultar Base de datos</h2>
                <form  action='./queries/bdd1.php' method='GET'>
                    <input class='button is-success' type='submit' value='Consultar'>
                </form>
            </div>
        </div>
        <div class="tile is-parent">
            <div class="tile is-child box">
                <h2 class="title">Pelea Pokemon</h2>
                <form action='./queries/X.php' method='GET'>
                    <div class="field is-grouped is-grouped-multiline">
                        <div class="control">
                            <label class="label" for="pokemon-1">Pokemon 1</label>
                            <div class="select">
                                <select name="pokemon-1">
                                    <option>Select dropdown</option>
                                    <option>With options</option>
                                </select>
                            </div>
                        </div>
                        <div class="control">
                            <label class="label" for="pokemon-1">Pokemon 2</label>
                            <div class="select">
                                <select name="pokemon-1">
                                    <option>Select dropdown</option>
                                    <option>With options</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <input class='button is-success' type='submit' value='Consultar'>
                </form>
            </div>
        </div>
    </div>
</main>

<?php include('./templates/footer.php'); ?>
