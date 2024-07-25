<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite(['resources/js/app.js', 'resources/css/app.scss'])
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Laravel</title>
</head>

<body id="content-body">

    <aside id="aside-menu">
        <nav id="nav-menu">
            <ul class="ul-menu">

                <li class="li-item">
                    <a class="link-item item-active" href="">
                        <span class="material-symbols-outlined icon">
                            home
                        </span>
                        Home
                    </a>
                </li>



                <li class="li-item">
                    <a href="#" class="link-item item-active toggle-menu">
                        <span class="material-symbols-outlined icon">
                            person
                        </span>
                        Usuarios
                        <span class="material-symbols-outlined icon-arrow">
                            chevron_left
                        </span>
                    </a>

                    <ul class="ul-item-menu collapsed">
                        <li class="li-item">
                            <a class="link-item sub-item-active" href="">
                                <span class="material-symbols-outlined icon">
                                    home
                                </span>
                                lista
                            </a>
                        </li>
                        <li class="li-item">
                            <a class="link-item" href="">
                                <span class="material-symbols-outlined icon">
                                    home
                                </span>
                                create
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="li-item">
                    <a href="#" class="link-item item-active toggle-menu">
                        <span class="material-symbols-outlined icon">
                            person
                        </span>
                        Usuarios
                        <span class="material-symbols-outlined icon-arrow">
                            chevron_left
                        </span>
                    </a>

                    <ul class="ul-item-menu collapsed">
                        <li class="li-item">
                            <a class="link-item sub-item-active" href="">
                                <span class="material-symbols-outlined icon">
                                    home
                                </span>
                                lista
                            </a>
                        </li>
                        <li class="li-item">
                            <a class="link-item" href="">
                                <span class="material-symbols-outlined icon">
                                    home
                                </span>
                                create
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>
        </nav>
    </aside>

    <main id="main-content">

        <nav class="navbar sticky-top bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar scroll</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                    aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Link
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" aria-disabled="true">Link</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>

        <div class="container-fluid">

            <h1>Hello, Vite!</h1>

            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fuga debitis, delectus at voluptas laudantium
            fugit? Labore, similique, eligendi veniam, quos at hic deleniti officiis amet quam vero officia corrupti
            laudantium.
            Rem est quas ipsam cumque cupiditate cum neque esse doloremque quia. Assumenda ullam maiores soluta
            accusamus nobis facilis, aliquam voluptatem possimus blanditiis corrupti enim delectus, ex impedit ad nulla
            consequuntur!
            Fuga, corrupti? Ullam sapiente eum sint amet, hic adipisci odio facere, quasi animi iure excepturi at,
            voluptates cum nesciunt asperiores ea. Dicta illum magnam ea quae ab nisi modi temporibus.
            Incidunt, impedit rerum. Eligendi quisquam quas cumque quidem ea officia facere magni, rem ratione provident
            ut non velit molestiae beatae nesciunt? Autem adipisci quas maxime exercitationem illo, eum voluptatum
            doloribus!
            Fugiat blanditiis, ipsum labore nobis ex aliquam fugit, ad ipsa reprehenderit eum, sint mollitia accusamus
            adipisci necessitatibus? Nesciunt, dolore consectetur. Non distinctio quos dolorem fuga. Delectus a totam
            consectetur! Esse?
            Culpa consequatur aliquam optio repellendus in dolor? Provident sint voluptatem ab consectetur culpa facilis
            unde voluptates soluta itaque, sunt sapiente quod reprehenderit cupiditate vero cum iusto libero at ex
            autem.
            Nihil alias officiis deleniti necessitatibus consequuntur reiciendis omnis fugiat saepe, quos maiores.
            Aperiam minus vitae reprehenderit magnam vel soluta pariatur, libero blanditiis maiores obcaecati sapiente
            quo unde ipsa quia saepe.
            Eum qui nihil autem? Esse aspernatur perferendis eos dolorem eligendi, magnam distinctio, ratione beatae
            ducimus, voluptatum est? Veniam repellendus, similique nobis non iste sapiente consequuntur vero! Officiis
            fuga possimus veritatis?
            Ducimus, ea, enim quibusdam dolorum veniam tempore dolores a explicabo quam corrupti quae dignissimos? Ullam
            fugit asperiores, cumque sit illum at dolores ratione optio consectetur, eum nihil rem similique porro.
            Amet assumenda reiciendis placeat mollitia vero nobis suscipit atque error facilis? Tempore velit fugiat
            dolor sapiente voluptas commodi vel aliquam cupiditate nesciunt quae eos hic laudantium aspernatur, aliquid
            ut dicta?
            Dolores consequuntur accusamus soluta ex possimus nesciunt iste magnam. Facilis itaque voluptate, sit magnam
            aliquam, mollitia ratione ex perspiciatis odit voluptates aliquid saepe, error temporibus officia ab modi.
            Dolores, culpa!
            Tenetur magni maxime minima quam officiis quo quibusdam, nihil necessitatibus autem. Non excepturi ipsa eos
            incidunt tempora, ut iure sed praesentium perspiciatis quod aliquam, officia voluptatum enim sapiente
            tenetur sunt!
            Corrupti, ipsa corporis eum ducimus pariatur officiis consectetur? Impedit quasi corporis numquam, eligendi,
            natus beatae quam est autem soluta in aut doloremque officia id deserunt similique atque iure reprehenderit
            quos.
            Nobis esse rerum sunt dolor eum vitae quis dolorum repudiandae deleniti nulla obcaecati ea sequi asperiores,
            dolore, laborum molestias? Aliquid autem quis et harum fugiat mollitia vel porro. Consectetur, dolorem.
            Possimus obcaecati earum, velit atque et ipsam, provident quas blanditiis fugit error ipsa quia mollitia est
            voluptates, officiis quae debitis eaque quasi architecto doloribus ratione veritatis. Repellat maxime nisi
            necessitatibus!
            Delectus qui aliquam ex corporis soluta harum ut iure veniam! Numquam, iusto quia reiciendis est et error
            officiis illum id praesentium eaque beatae. Nobis dicta, quia at voluptatibus ad minima!
            Tenetur ea eligendi aliquid pariatur commodi consequuntur dolores quas id reiciendis eum, fuga eos saepe,
            laudantium harum aut sequi natus. Impedit dicta corrupti odio quisquam exercitationem. Sequi autem nulla
            facilis.
            Recusandae praesentium sequi odit provident sunt incidunt error, eius est iusto itaque aliquam, beatae
            repellendus. Sapiente nihil nobis accusamus neque repudiandae temporibus reprehenderit, nam deserunt non
            reiciendis aliquam molestiae velit.
            Animi aliquam itaque obcaecati error nulla eaque, placeat quas facilis voluptatum laboriosam cumque laborum,
            aliquid odit perferendis voluptates, mollitia nam! Autem, quaerat. Repellat odio, accusamus aliquam iusto
            blanditiis corporis qui.
            Vitae accusantium iste, numquam voluptas consequuntur magni saepe quidem, corrupti natus architecto fugit
            nam magnam sed pariatur blanditiis necessitatibus quasi voluptatem nisi quam assumenda veniam dolores
            deleniti? Itaque, corporis explicabo.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem qui dolore repellendus placeat optio
            obcaecati earum, harum laudantium ut? Eum illo qui deleniti sapiente magni vel officia voluptatum quos sit.
            Optio quo et eos aperiam, voluptas accusantium adipisci vero repellat aspernatur at quibusdam inventore
            aliquam tempora reiciendis pariatur. Maxime hic excepturi beatae vitae voluptatem consequatur repellendus
            laborum sit pariatur fugiat?
            Officiis expedita, inventore repellendus, porro iure, aliquam possimus optio molestias earum voluptatem et!
            Recusandae distinctio adipisci expedita laudantium. Error reiciendis fugiat quam sapiente, laboriosam
            inventore facilis quis accusantium eos non!
            Asperiores sint eveniet accusamus error ratione illum repellat explicabo modi repudiandae vitae libero, vero
            perferendis quia provident! Amet culpa, architecto, omnis similique, explicabo inventore tempore delectus
            voluptatem facilis odio expedita.
            Neque fuga voluptate minima cumque vitae velit asperiores exercitationem sit aliquid, maxime odio deserunt
            ad ipsam nemo ut obcaecati non, consectetur facere. Nostrum vel ratione similique labore quisquam iusto
            fugiat.
            Est ratione rem beatae sunt consectetur? Neque culpa fugiat exercitationem veritatis non, ut cupiditate nemo
            corporis laudantium cum voluptas adipisci hic in delectus deserunt id tempora et officiis qui tenetur?
            At reprehenderit illum quisquam, aliquam cum harum nihil rem. Delectus distinctio fuga tempore rerum facere!
            Sequi doloribus accusantium saepe, iste sed unde cum voluptatum corporis, aut dolorem possimus laboriosam
            ipsa.
            Exercitationem recusandae eos doloremque, dolores qui labore impedit voluptates veniam nihil maiores
            voluptas nemo odio ipsa aperiam architecto. Reprehenderit doloremque explicabo sit rerum libero id esse ad
            modi odio ipsa!
            Blanditiis animi, modi tempore dolorum est quam perferendis sunt earum adipisci corporis corrupti veniam
            provident dolores cum amet, quos suscipit totam, reiciendis mollitia inventore numquam nulla incidunt?
            Illum, commodi beatae.
            Alias iusto illo aut aliquid, temporibus reiciendis aspernatur dolores labore autem earum ratione, magnam
            soluta delectus necessitatibus ad est exercitationem harum non voluptatum ullam excepturi totam tempore
            perspiciatis expedita! Fugiat.
            Earum fuga maiores ipsa, omnis eum beatae nesciunt magnam inventore voluptates quam, rerum atque praesentium
            voluptate! Magni quos quidem quaerat tempora. Enim obcaecati, non laudantium voluptas sunt quo deleniti
            deserunt.
            Veniam labore laborum laboriosam ipsa, nisi facere facilis dolorem ea explicabo corrupti dolore asperiores
            suscipit molestias, blanditiis obcaecati tempora totam doloremque laudantium eum perspiciatis, magni est
            praesentium? Unde, dignissimos voluptatem.
            Ut rerum accusantium veritatis earum temporibus cum eveniet ullam consectetur, qui reprehenderit quo magni
            architecto laboriosam saepe! Pariatur provident harum reiciendis placeat porro quos corrupti officiis
            dolorum, perferendis maxime eius!
            Libero aliquid dolores ab nulla soluta vitae ad commodi quaerat sapiente! Cum corporis debitis id impedit
            aliquam sint repellendus, reprehenderit earum libero dicta aut nulla. Temporibus rem optio tempora dicta!
            Expedita quam necessitatibus, sed sequi natus reprehenderit nisi itaque quae porro. Mollitia dignissimos,
            eum iste ut ullam commodi aliquam reiciendis, nesciunt, impedit at quod voluptatum fuga maiores suscipit
            perspiciatis ipsam.
            Ratione ad perferendis illum nulla sequi! Inventore, pariatur! Voluptatem modi et perferendis ad maiores,
            suscipit dolores error distinctio sapiente beatae quaerat blanditiis nobis, natus impedit voluptatibus
            aliquam. Magni, debitis dolorum!
            Sit, ullam vero dicta officia cum molestiae pariatur nesciunt vitae quod minus impedit magni facere,
            exercitationem qui inventore consequuntur iure, quam ratione assumenda harum quidem saepe odit reiciendis?
            Incidunt, modi.
            Minima cum minus assumenda optio! In magni suscipit facere debitis cum itaque, eos maxime sequi dolores
            aperiam accusamus numquam laborum cumque quaerat quae maiores, delectus facilis molestias corrupti fuga
            tenetur.
            Inventore architecto vitae quos. Recusandae praesentium doloremque error tenetur explicabo ipsa facere
            voluptates pariatur id impedit! Distinctio ratione aspernatur perspiciatis debitis enim ab sit, nemo,
            doloribus iure quas magnam eius.
            Nisi veritatis rem impedit ea fugiat fuga assumenda ducimus commodi maiores? Autem officiis sit laborum
            tempore reprehenderit cum atque aperiam, voluptatem magni expedita deleniti minus debitis commodi. Illum,
            sequi minima?

        </div>

    </main>

</body>

</html>
