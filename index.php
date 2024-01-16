<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php dischi json</title>
    <!-- css -->
    <link rel="stylesheet" href="./style/style.css">
    <!-- axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!-- vue -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
</head>

<body>
    <div id="app">
        <header>
            <img src="https://cdn-icons-png.flaticon.com/512/174/174872.png" alt="spotify logo" class="logo">
        </header>
        <main>
            <section class="albums">
                <article v-for="(element, index) in discs">
                    <div class="wrapper">
                        <img :src="element.img" :alt="element.title" class="album">
                        <p class="title bold">
                            {{ element.title }}
                        </p>
                        <p class="artist light">
                            {{ element.artist }}
                        </p>
                        <p class="released bold">
                            {{ element.released }}
                        </p>
                    </div>
                </article>
            </section>
        </main>

    </div>

    <script src="./js/script.js"></script>
</body>

</html>