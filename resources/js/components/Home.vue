<template>
  <v-container>
    <v-row class="row">
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

      <v-col cols="10" sm="5" md="5">
        <h1 class="title-home">Hi, I'am William</h1>
        <h5 class="subtitle-home">Frontend - backend developer</h5>
        <p class="text-muted">
          High level experience in web design and development knowledge,
          producing quality work
        </p>
        <a href="/contact" class="button"
          >Contact Me <i class="bi bi-send" style="margin-left: 4px"></i
        ></a>
      </v-col>
      <v-col cols="12" sm="5" md="5" class="home__img pt-0" align="center">
        <!-- <img src="" alt="" /> -->
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
              x="12"
              y="18"
              xlink:href="/img/perfil.png"
            />
          </g>
        </svg>
      </v-col>
    </v-row>
    <!-- <div class="home section">
      <div class="home__container container grid">
        <div class="home__content grid">
          <div class="home__social">
            <a href="" class="home__social-icon"
              ><i class="uil uil-linkedin-alt"></i
            ></a>
            <a href="" class="home__social-icon"
              ><i class="uil uil-whatsapp"></i
            ></a>
            <a href="" class="home__social-icon"
              ><i class="uil uil-github-alt"></i
            ></a>
          </div>
          <div class="home__img">
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
                <image class="home__blob-img" xlink:href="/img/perfil.png" />
              </g>
            </svg>
          </div>

          <div class="home__dat">
            <h1 class="title-home">Hi, I'am William</h1>
            <h5 class="subtitle-home">Frontend - backend developer</h5>
            <p class="text-muted">
              High level experience in web design and development knowledge,
              producing quality work
            </p>
            <a href="/contact" class="button button--flex"
              >Contact Me <i class="uil uil-message button__icon"></i
            ></a>
          </div>
        </div>
      </div>
    </div> -->
  </v-container>
</template>

<script>
export default {
  mounted() {
    console.log("Component mounted.");
  },
};
</script>
