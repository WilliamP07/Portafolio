<template>
  <v-container>
    <v-row class="row">
      <v-col cols="12" sm="12" md="5" class="pt-0 desktop" align="center">
        <svg
          class="home__blob"
          viewBox="0 0 200 187"
          xmlns="http://www.w3.org/2000/svg"
          xmlns:xlink="http://www.w3.org/1999/xlink"
        >
          <mask id="mask0" mask-type="alpha">
            <path
              d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 165.547 
        130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 129.362C2.45775 
        97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 -0.149132 97.9666 
        0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z"
            />
          </mask>
          <g mask="url(#mask0)">
            <path
              d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 
        165.547 130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 
        129.362C2.45775 97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 
        -0.149132 97.9666 0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z"
            />
            <image
              class="home__blob-img"
              x="20"
              y="28"
              xlink:href="/img/perfil.png"
            />
          </g>
        </svg>
      </v-col>
      <v-col cols="2" sm="2" md="2">
        <li class="no-list-style">
          <a href="" class="home__social-icon"
            ><i class="bi bi-linkedin"></i
          ></a>
        </li>
        <li class="no-list-style">
          <a href="" class="home__social-icon"
            ><i class="bi bi-whatsapp"></i
          ></a>
        </li>
        <li class="no-list-style">
          <a
            href="https://github.com/WilliamP07"
            target="_blank"
            class="home__social-icon"
            ><i class="bi bi-github"></i
          ></a>
        </li>
      </v-col>

      <v-col cols="10" sm="10" md="5">
        <h1 class="title-home">Hola, soy William</h1>
        <h5 class="subtitle-home">FrontEnd - BackEnd Developer</h5>
        <p class="text-muted text-home">
          Experiencia de alto nivel en el desarrollo de páginas web y
          aplicativos, producción de trabajos de calidad
        </p>
        <a href="/contact" class="button"
          >Contáctame <i class="bi bi-send" style="margin-left: 4px"></i
        ></a>
      </v-col>
      <v-col cols="12" sm="12" md="5" class="pt-0 movil" align="center">
        <svg
          class="home__blob"
          viewBox="0 0 200 187"
          xmlns="http://www.w3.org/2000/svg"
          xmlns:xlink="http://www.w3.org/1999/xlink"
        >
          <mask id="mask0" mask-type="alpha">
            <path
              d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 165.547 
        130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 129.362C2.45775 
        97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 -0.149132 97.9666 
        0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z"
            />
          </mask>
          <g mask="url(#mask0)">
            <path
              d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 
        165.547 130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 
        129.362C2.45775 97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 
        -0.149132 97.9666 0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z"
            />
            <image
              class="home__blob-img"
              x="20"
              y="28"
              xlink:href="/img/perfil.png"
            />
          </g>
        </svg>
      </v-col>
    </v-row>
  </v-container>
</template>

<script>
export default {
  mounted() {},
};
</script>
