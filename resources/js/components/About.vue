<template>
  <v-container>
    <!-- About section -->
    <v-row class="pb-4">
      <div class="text-center mb-3">
        <h1 class="title-home">Sobre mí</h1>
        <h5 class="subtitle-home">Mi introducción</h5>
      </div>

      <v-col cols="12" sm="12" md="6">
        <v-img
          src="/img/computadora.jpg"
          alt="computadora"
          class="img-fluid mx-auto about-img"
          width="70%"
        />
      </v-col>
      <v-col cols="12" sm="12" md="6">
        <p class="text-muted text-home">
          Desarrollador web con experiencia en desarrollo de Back-End y
          FrontEnd. Conocimientos amplios en tecnologías como PHP, Laravel,
          VueJs, diseño web adaptable y sistemas de gestión de contenidos (CMS);
          entregando un trabajo de calidad.
          <v-row class="">
            <v-col cols="4" md="4" sm="4">
              <span class="about__info-title">6+</span>
              <span class="about__info-name text-muted"
                >Meses de<br />
                experiencia</span
              >
            </v-col>
            <v-col cols="4" md="4" sm="4">
              <span class="about__info-title">5+</span>
              <span class="about__info-name text-muted"
                >Proyectos <br />
                completados
              </span>
            </v-col>
            <v-col cols="4" md="4" sm="4">
              <span class="about__info-title">1+</span>
              <span class="about__info-name text-muted"
                >Empresas <br />
                trabajadas</span
              >
            </v-col>
          </v-row>
          <a download="" href="/pdf/CV.pdf" class="button mt-4"
            >Descargar CV <i class="bi bi-download" style="margin-left: 4px"></i
          ></a></p
      ></v-col>
    </v-row>
  </v-container>
</template>

<script>
export default {
  mounted() {},
};
</script>
