<?php $title = "Favorites" ?>

<?php include '../templates/head.html.php' ?>

    </nav>
    <nav class="navbar navbar-light bg-secondary container-fluid justify-content-end">

        <a class="btn btn-primary btn-outline-success  text-dark  me-2" href="/favorites?sort=desc">
            Newest
        </a>
        <a class="btn btn-warning btn-outline-danger  text-dark  me-2" href="/favorites?sort=asc">
            Oldest
        </a>
    </nav>

    <main class="container">
        <?php if (0 === count($favorites)) : ?>
            <div class="mt-4 text-center">
                <h1>You do not have favorite</h1>
                <p>Start by adding some favorite URL</p>
            </div>
        <?php else: ?>
            <div class="row">
                <style scoped>
                    .card-title img {
                        width: 1em;
                        height: 1em;
                    }

                    .card-title a {
                        color: inherit;
                        text-decoration: none;
                    }

                    /*.card:hover .bi-trash {*/
                    /*    display: block !important;*/
                    /*}*/

                    iframe {
                        width: 100%;
                        height: 100%;
                    }
                </style>
                <?php foreach ($favorites as $key => $favorite) : ?>
                    <div class="favorite col-6 col-md-4 col-lg-3 mt-3 mb-3">
                        <div class="card h-100">
                            <div class="card-header">
                                <h5 class="card-title">
                                    <img class="me-2"
                                         src="<?= $favorite["favicon"] ?>"
                                         alt=""/>
                                    <span><?= $favorite["title"] ?></span>
                                </h5>
                            </div>
                            <div class="card-body">
                                <p class="card-text">
                                    <?php if ($favorite["preview"]): ?>
                                        <iframe width="560" height="315"
                                                src="https://www.youtube.com/embed/<?= $favorite["preview"]?>"
                                                title="YouTube video player"
                                                frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                allowfullscreen></iframe>
                                    <?php elseif ($favorite["description"]): ?>
                                        <?= $favorite["description"] ?>
                                    <?php else: ?>
                                        <span class="blockquote-footer">No description avalaible</span>
                                    <?php endif ?>
                                </p>
                            </div>
                            <div class="card-footer">
                                <?php if (!array_key_exists("has", $favorite)): ?>
                                    <a href="/favorites?favorite=<?= $favorite["id"] ?>"
                                       class="btn btn-success">Add</a>
                                <?php endif ?>
                                <a target="_blank"
                                   href="<?= $favorite["href"] ?>"
                                   class="btn
                            btn-primary">Visit</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

        <?php endif; ?>
    </main>

<script>
    <?php include '../templates/favorites/showFavorites.js' ?>
</script>
<?php include '../templates/footer.html.php' ?>

<!--    <script>-->
<!--        //document.querySelector(".spinner-container").classList.remove("d-none");-->
<!--        const createSpinner = () => {-->
<!--            const spinnerContainer = document.createElement("div");-->
<!--            const spinner = document.createElement("div");-->
<!--            spinnerContainer.className = "spinner-container text-center mt-3 mb-3";-->
<!--            spinner.className = "spinner-border";-->
<!--            spinnerContainer.appendChild(spinner);-->
<!--            return spinnerContainer;-->
<!--        }-->
<!---->
<!---->
<!--        const onScroll = () => {-->
<!--            console.log("scroll");-->
<!--            const spinner = createSpinner();-->
<!--            if ((window.innerHeight + window.scrollY) >= document.body.offsetHeight - 1) {-->
<!--                window.removeEventListener("scroll", onScroll);-->
<!--                document.querySelector("main").appendChild(spinner);-->
<!--                requestFavorite(spinner);-->
<!--            }-->
<!--        };-->
<!---->
<!--        const requestFavorite = (spinner) => {-->
<!--            const xhr = new XMLHttpRequest();-->
<!--            xhr.open("GET", `/api/favorites?offset=${document.querySelectorAll(".favorite").length}`);-->
<!--            xhr.onload = () => {-->
<!--                const data = JSON.parse(xhr.response);-->
<!--                document.querySelector("main").removeChild(spinner);-->
<!--                const container = document.querySelector("main .row");-->
<!--                -->
<!--                data.forEach((value, key) =>{-->
<!--                    container.innerHTML += getHTMLFavorite(value) +getHTMLFavoritePreviewDescription(value)-->
<!--                         + getHTMLFavoriteHref(value);-->
<!--                });-->
<!--                    window.addEventListener("scroll", onScroll);-->
<!--                -->
<!--            }-->
<!--            xhr.send();-->
<!--        };-->
<!---->
<!---->
<!---->
<!--        const getHTMLFavorite = (favorite) => {-->
<!--            return `-->
<!--                <div class="favorite col-6 col-md-4 col-lg-3 mt-3 mb-3">-->
<!--                        <div class="card h-100">-->
<!--                            <div class="card-header">-->
<!--                                <h5 class="card-title">-->
<!--                                    <img class="me-2"-->
<!--                                         src="${favorite.favicon}"-->
<!--                                         alt=""/>-->
<!--                                    <span>${favorite.title}</span>-->
<!--                                </h5>-->
<!--                            </div>-->
<!--                            <div class="card-body">-->
<!--                                <p class="card-text">-->
<!--            `;-->
<!--        };-->
<!---->
<!---->
<!--        const getHTMLFavoritePreviewDescription = (favorite) => {-->
<!--            if (favorite.preview) {-->
<!--                return ` <iframe width="560" height="315"-->
<!--                                                src="https://www.youtube.com/embed/${favorite.preview}"-->
<!--                                                title="YouTube video player"-->
<!--                                                frameborder="0"-->
<!--                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"-->
<!--                                                allowfullscreen></iframe>`-->
<!--            }else if (favorite.description) {-->
<!--                return `${favorite.description}`-->
<!--            }else {-->
<!--                return ` <span class="blockquote-footer">No description avalaible</span>`-->
<!--            }-->
<!--        }-->
<!---->
<!---->
<!---->
<!--        const getHTMLFavoriteHref = (favorite) => {-->
<!---->
<!--                return `</p>-->
<!--                            </div>-->
<!--                            <div class="card-footer">-->
<!--                                <a target="_blank"-->
<!--                                   href="${favorite.href}"-->
<!--                                   class="btn-->
<!--                            btn-primary">Visit</a>-->
<!---->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>`-->
<!---->
<!--        }-->
<!---->
<!--        window.addEventListener("scroll", onScroll);-->
<!---->
<!--    </script>-->


<!---->
<!---->
<!--<script>-->
<!---->
<!---->
<!---->
<!--    const getHTMLFavoriteEntier = (favorite) => {-->
<!--        return `-->
<!--                <div class="favorite col-6 col-md-4 col-lg-3 mt-3 mb-3">-->
<!--                        <div class="card h-100">-->
<!--                            <div class="card-header">-->
<!--                                <h5 class="card-title">-->
<!--                                    <img class="me-2"-->
<!--                                         src="${favorite.favicon}"-->
<!--                                         alt=""/>-->
<!--                                    <span>${favorite.title}</span>-->
<!--                                </h5>-->
<!--                            </div>-->
<!--                            <div class="card-body">-->
<!--                                <p class="card-text">-->
<!---->
<!--                                    -->
<?php //if ($favorite["preview"]): ?>
<!--//                                        <iframe width="560" height="315"-->
<!--//                                                src="https://www.youtube.com/embed/${favorite.preview}"-->
<!--//                                                title="YouTube video player"-->
<!--//                                                frameborder="0"-->
<!--//                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"-->
<!--//                                                allowfullscreen></iframe>-->
<!--//-->
<!--//                                    --><?php ////elseif ($favorite["description"]): ?>
<!--//                                        ${favorite.description}-->
<!--//                                    --><?php ////else: ?>
<!--//                                        <span class="blockquote-footer">No description avalaible</span>-->
<!--//                                    --><?php ////endif ?>
<!--//                                </p>-->
<!--//                            </div>-->
<!--//                            <div class="card-footer">-->
<!--//                                <a target="_blank"-->
<!--//                                   href="${favorite.href}"-->
<!--//                                   class="btn-->
<!--//                            btn-primary">Visit</a>-->
<!--//-->
<!--//                            </div>-->
<!--//                        </div>-->
<!--//                    </div>-->
<!--//            `;-->
<!--//    };-->




<!---->
<!--        // const container = document.querySelector("main .row");-->
<!--        // const divPrincipale = document.createElement("div");-->
<!--        //-->
<!---->
<!--        // data.forEach((value, key) => {-->
<!--        //     console.log(key, value);-->
<!--        //     container.appendChild(divPrincipale);-->
<!--        //     const divCard = document.createElement("div");-->
<!--        //     const divCardHeader = document.createElement("div");-->
<!--        //     const hCardTitle = document.createElement("h5");-->
<!--        //     const divCardBody = document.createElement("div");-->
<!--        //     const pCardText = document.createElement("p");-->
<!--        //     const divCardFooter = document.createElement("div");-->
<!--        //     const spanTitle = document.createElement("span");-->
<!--        //     const spanBlockquoteFooter = document.createElement("span");-->
<!--        //-->
<!--        //     const title = document.createTextNode(value.title);-->
<!--        //     const description = document.createTextNode(value.description);-->
<!--        //     const textBlockquoteFooter = document.createTextNode("No description available")-->
<!--        //     const href = document.createTextNode(value.href);-->
<!--        //-->
<!--        //     divPrincipale.className = "col-6 col-md-4 col-lg-3 mt-3 mb-3";-->
<!--        //     divCard.className = "card";-->
<!--        //     //divCard.className = "card h-100";-->
<!--        //     hCardTitle.className ="card-title";-->
<!--        //     divCardBody.className = "card-body";-->
<!--        //     pCardText.className = "card-text";-->
<!--        //     spanBlockquoteFooter.className = "blockquote-footer";-->
<!--        //     divCardFooter.className = "card-footer";-->
<!--        //-->
<!--        //-->
<!--        //     divPrincipale.appendChild(divCard);-->
<!--        //     divCard.appendChild(divCardHeader);-->
<!--        //     divCardHeader.appendChild(hCardTitle);-->
<!--        //     hCardTitle.appendChild(spanTitle);-->
<!--        //     spanTitle.appendChild(title);-->
<!--        //-->
<!--        //     divCard.appendChild(divCardBody);-->
<!--        //     divCardBody.appendChild(pCardText);-->
<!--        //     if(description){-->
<!--        //         pCardText.appendChild(description);-->
<!--        //     }else{-->
<!--        //         pCardText.appendChild(spanBlockquoteFooter);-->
<!--        //         spanBlockquoteFooter.appendChild(textBlockquoteFooter);-->
<!--        //     }-->
<!--        //-->
<!--        //     divCard.appendChild(divCardFooter);-->
<!--        //     divCardFooter.appendChild(href);-->
<!--        //-->
<!--        //-->
<!--        //-->
<!--        // })-->
<!--//         const getFavoriteHTML = (favorite) => {-->
<!--//             return `<li>-->
<!--// </li>`-->
<!--//-->
<!--//         }-->
<!---->
<!---->
<!--        /*-->
<!--        //remove le spinner-->
<!---->
<!--        const ul = document.createElement("ul");-->
<!--        container.appendChild(ul);-->
<!--        //mettre en forme ma donnée-->
<!--        data.forEach((value, key) => {-->
<!--            console.log(key, value);-->
<!--            const li = document.createElement("li");-->
<!--            const href = document.createTextNode(value.href);-->
<!--            li.appendChild(href);-->
<!--            ul.appendChild(li);-->
<!--            })-->
<!--        }-->
<!---->
<!---->
<!--*/-->
<!--        /*//DOM-->
<!--               //récupérer un élément-->
<!--               const main = document.querySelector("main.container");-->
<!--               //Créer des éléments-->
<!--               const div = document.createElement("div");-->
<!--               const textNode = document.createTextNode("du texte");-->
<!---->
<!--               //Insérer des éléments-->
<!--               main.appendChild(div);-->
<!--               div.appendChild(textNode);-->
<!---->
<!--               //Modifier l'HTML-->
<!--               main.innerHTML += `<div>Autre texte </div>`;-->
<!---->
<!--               //Event-->
<!--                   window.addEventListener("scroll", () =>{-->
<!--                       console.log(window.document.body.scrollTop);-->
<!--                       console.log(window.document.body.scrollHeight);-->
<!--               })*/-->
<!---->
<!--</script>-->