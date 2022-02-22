<template>
  <v-container>
    <!-- Skills section -->
    <v-row>
      <div class="text-center mb-3">
        <h1 class="title-home">Habilidades</h1>
        <h5 class="subtitle-home">Mi nivel técnico</h5>
        <!-- <hr width="50%" style="height: 3px" class="subtitle-home mx-auto" /> -->
      </div>

      <!-- Skills FrontEnd -->
      <div class="skills__content skills__open">
        <div class="skills__header">
          <i class="bi bi-braces skills__icon"></i>
          <div>
            <h1 class="skills__title">Frontend developer</h1>
            <span class="skills__subtitle text-muted">Más de 4 meses</span>
          </div>
          <i class="bi bi-caret-down skills__arrow"></i>
        </div>
        <div class="skills__list">
          <div class="skills__data">
            <div class="skills__title">
              <h3 class="skills_name">HTML</h3>
              <span class="skills__number"> 90% </span>
            </div>
            <div class="skills__bar">
              <div class="skills__percentage skills__html"></div>
            </div>
          </div>
          <div class="skills__data">
            <div class="skills__title">
              <h3 class="skills_name">CSS</h3>
              <span class="skills__number"> 80% </span>
            </div>
            <div class="skills__bar">
              <div class="skills__percentage skills__css"></div>
            </div>
          </div>
          <div class="skills__data">
            <div class="skills__title">
              <h3 class="skills_name">JavaScript</h3>
              <span class="skills__number"> 30% </span>
            </div>
            <div class="skills__bar">
              <div class="skills__percentage skills__js"></div>
            </div>
          </div>
          <div class="skills__data">
            <div class="skills__title">
              <h3 class="skills_name">Bootstrap</h3>
              <span class="skills__number"> 80% </span>
            </div>
            <div class="skills__bar">
              <div class="skills__percentage skills__bootstrap"></div>
            </div>
          </div>
          <div class="skills__data">
            <div class="skills__title">
              <h3 class="skills_name">Vuetify</h3>
              <span class="skills__number"> 50% </span>
            </div>
            <div class="skills__bar">
              <div class="skills__percentage skills__vuetify"></div>
            </div>
          </div>
          <div class="skills__data">
            <div class="skills__title">
              <h3 class="skills_name">Responsive design</h3>
              <span class="skills__number"> 90% </span>
            </div>
            <div class="skills__bar">
              <div class="skills__percentage skills__responsive"></div>
            </div>
          </div>
        </div>
      </div>

      <!-- Skills BackEnd -->
      <div class="skills__content skills__close">
        <div class="skills__header">
          <i class="bi bi-hdd-network skills__icon"></i>
          <div>
            <h1 class="skills__title">Backend developer</h1>
            <span class="skills__subtitle text-muted">Más de 4 meses</span>
          </div>
          <i class="bi bi-caret-down skills__arrow"></i>
        </div>
        <div class="skills__list">
          <div class="skills__data">
            <div class="skills__title">
              <h3 class="skills_name">PHP</h3>
              <span class="skills__number"> 50% </span>
            </div>
            <div class="skills__bar">
              <div class="skills__percentage skills__php"></div>
            </div>
          </div>
          <div class="skills__data">
            <div class="skills__title">
              <h3 class="skills_name">Java</h3>
              <span class="skills__number"> 30% </span>
            </div>
            <div class="skills__bar">
              <div class="skills__percentage skills__java"></div>
            </div>
          </div>
          <div class="skills__data">
            <div class="skills__title">
              <h3 class="skills_name">Laravel</h3>
              <span class="skills__number"> 40% </span>
            </div>
            <div class="skills__bar">
              <div class="skills__percentage skills__laravel"></div>
            </div>
          </div>
          <div class="skills__data">
            <div class="skills__title">
              <h3 class="skills_name">Vue Js</h3>
              <span class="skills__number"> 40% </span>
            </div>
            <div class="skills__bar">
              <div class="skills__percentage skills__vue"></div>
            </div>
          </div>
          <div class="skills__data">
            <div class="skills__title">
              <h3 class="skills_name">Node Js</h3>
              <span class="skills__number"> 40% </span>
            </div>
            <div class="skills__bar">
              <div class="skills__percentage skills__node"></div>
            </div>
          </div>
        </div>
      </div>

      <!-- Skills DataBase -->
      <div class="skills__content skills__close">
        <div class="skills__header">
          <i class="bi bi-hdd-rack skills__icon"></i>
          <div>
            <h1 class="skills__title">Database</h1>
            <span class="skills__subtitle text-muted">Más de 4 meses</span>
          </div>
          <i class="bi bi-caret-down skills__arrow"></i>
        </div>
        <div class="skills__list">
          <div class="skills__data">
            <div class="skills__title">
              <h3 class="skills_name">SQL Server</h3>
              <span class="skills__number"> 60% </span>
            </div>
            <div class="skills__bar">
              <div class="skills__percentage skills__sql"></div>
            </div>
          </div>
          <div class="skills__data">
            <div class="skills__title">
              <h3 class="skills_name">MySQL</h3>
              <span class="skills__number"> 75% </span>
            </div>
            <div class="skills__bar">
              <div class="skills__percentage skills__mysql"></div>
            </div>
          </div>
          <div class="skills__data">
            <div class="skills__title">
              <h3 class="skills_name">MongoDB</h3>
              <span class="skills__number"> 30% </span>
            </div>
            <div class="skills__bar">
              <div class="skills__percentage skills__mongo"></div>
            </div>
          </div>
        </div>
      </div>
    </v-row>
  </v-container>
</template>

<script>
export default {
  mounted() {},
};
</script>
