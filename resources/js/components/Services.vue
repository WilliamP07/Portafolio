<template>
  <v-container>
    <!-- Qualification section -->
    <v-row>
      <div class="qualification section">
        <div class="text-center mb-3">
          <h1 class="title-home">Experiencia</h1>
          <h5 class="subtitle-home">Datos académicos</h5>
        </div>

        <div class="qualification__container">
          <div class="qualification__tabs">
            <div
              class="qualification__button button--flex qualification__active"
              data-target="#education"
            >
              <i class="bi bi-mortarboard qualification__icon"></i>
              Educación
            </div>
            <div class="qualification__button button--flex" data-target="#work">
              <i class="bi bi-briefcase qualification__icon"></i>
              Trabajo
            </div>
          </div>
          <div class="qualification__sections">
            <!-- STUDY -->
            <div
              class="qualification__content qualification__active"
              data-content
              id="education"
            >
              <!-- Study section 1-->
              <div class="qualification__data">
                <div>
                  <h3 class="qualification__title">Bachillerato General</h3>
                  <span class="qualification__subtitle"
                    >Complejo Educativo Católico San Francisco</span
                  >
                  <div class="qualification__calendar text-muted">
                    <i class="bi bi-calendar4-week"></i>
                    2018 - 2019
                  </div>
                </div>

                <div>
                  <span class="qualification__rounder"></span>
                  <span class="qualification__line"></span>
                </div>
              </div>
              <!-- Study section 2-->
              <div class="qualification__data">
                <div></div>

                <div>
                  <span class="qualification__rounder"></span>
                  <!-- <span class="qualification__line"></span> -->
                </div>
                <div>
                  <h3 class="qualification__title">
                    Téc. en ingeniería de Sistemas Informáticos
                  </h3>
                  <span class="qualification__subtitle">ITCA - FEPADE</span>
                  <div class="qualification__calendar text-muted">
                    <i class="bi bi-calendar4-week"></i>
                    2020 - 2022
                  </div>
                </div>
              </div>
            </div>
            <!-- WORK -->
            <div class="qualification__content" data-content id="work">
              <!-- work section 1-->
              <div class="qualification__data">
                <!-- <div></div> -->
                <div>
                  <h3 class="qualification__title">
                    Asistente en instalación de cámaras de video vigilancia
                  </h3>
                  <span class="qualification__subtitle">Creas Company</span>
                  <div class="qualification__calendar text-muted">
                    <i class="bi bi-calendar4-week"></i>
                    12/2019 - 01/2020
                  </div>
                </div>
                <div>
                  <span class="qualification__rounder"></span>
                  <span class="qualification__line"></span>
                </div>
              </div>
              <!-- work section 2-->
              <div class="qualification__data">
                <div></div>
                <div>
                  <span class="qualification__rounder"></span>
                  <span class="qualification__line"></span>
                </div>
                <div>
                  <h3 class="qualification__title">Página web “Dolze Cero”</h3>
                  <span class="qualification__subtitle">Freelance</span>
                  <div class="qualification__calendar text-muted">
                    <i class="bi bi-calendar4-week"></i>
                    10/2020 - 12/2020
                  </div>
                </div>
              </div>
              <!-- work section 3-->
              <div class="qualification__data">
                <!-- <div></div> -->

                <div>
                  <h3 class="qualification__title">
                    Sistema de Inventario de Bienes Culturales Inmuebles (IBCI)
                  </h3>
                  <span class="qualification__subtitle"
                    >Ministerio de Cultura</span
                  >
                  <div class="qualification__calendar text-muted">
                    <i class="bi bi-calendar4-week"></i>
                    09/2021 - 10/2021
                  </div>
                </div>
                <div>
                  <span class="qualification__rounder"></span>
                  <span class="qualification__line"></span>
                </div>
              </div>
              <!-- work section 2-->
              <div class="qualification__data">
                <div></div>
                <div>
                  <span class="qualification__rounder"></span>
                  <span class="qualification__line"></span>
                </div>
                <div>
                  <h3 class="qualification__title">
                    Sistema de Registro Nacional de Artistas y Trabajadores de
                    la Cultura (RENTCA)
                  </h3>
                  <span class="qualification__subtitle"
                    >Ministerio de Cultura</span
                  >
                  <div class="qualification__calendar text-muted">
                    <i class="bi bi-calendar4-week"></i>
                    10/2021 - 01/2022
                  </div>
                </div>
              </div>
              <!-- work section 3-->
              <div class="qualification__data">
                <!-- <div></div> -->

                <div>
                  <h3 class="qualification__title">
                    Sistema de Convocatoria Comités Ciudadanos 2022 - 2023
                  </h3>
                  <span class="qualification__subtitle"
                    >Ministerio de Cultura</span
                  >
                  <div class="qualification__calendar text-muted">
                    <i class="bi bi-calendar4-week"></i>
                    01/2022 - 02/2022
                  </div>
                </div>
                <div>
                  <span class="qualification__rounder"></span>
                  <!-- <span class="qualification__line"></span> -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </v-row>
  </v-container>
</template>

<script>
export default {
  mounted() {
    // console.log("Component mounted.");
  },
};
</script>
