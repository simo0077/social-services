<template>
    <nav class="navbar navbar-light navbar-expand">

        <!-- Logo -->
        <a class="navbar-brand" href="#">
            <img src="/pictures/Morroco.png" width="40" height="40" alt="" /> <!-- Insert the image -->
        </a>

        <!-- NavBar Components -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" :class="[selected==='accueil'?'active':'']" href="/">Accueil</a></li>
                <li class="nav-item"><a class="nav-link" :class="[selected==='services'?'active':'']" href="/services">Services</a></li>
                <li class="nav-item"><a class="nav-link" :class="[selected==='suivi'?'active':'']" href="#">Suivi de demandes</a></li>
                <li class="nav-item"><a class="nav-link" :class="[selected==='contact'?'active':'']" href="#">Contactez-nous</a> </li>
            </ul>
        </div>

        <!--<button type="button" class="btn btn-outline-dark">Connexion</button>-->
    </nav>
</template>

<script>
export default {
    props: ['selected'],
    created() {
        console.log(selected);
    }
}
</script>


<style lang="scss">
@import '../../sass/app.scss';
nav {
    font-family: $general-font;
    padding: 0 3% 0 2%;
    background-color: $nav-color;
    font-size: 20px;

    img {
        margin-right: 15px;
    }

    li {
        padding-top: 3px;
        color: $nav-text-color;
        margin-right: 20px;

        .nav-link {
            text-decoration: none;
        }
    }
}

</style>
