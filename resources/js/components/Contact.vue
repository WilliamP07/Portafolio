<template>
  <v-container>
    <!-- Contact section -->
    <v-row class="pb-4">
      <div class="text-center mb-3">
        <h1 class="title-home">Contacto</h1>
        <h5 class="subtitle-home">Ponte en contacto</h5>
      </div>
    </v-row>
    <v-row class="pb-4">
      <v-col cols="12" md="6" sm="6">
        <div class="contact__information tag">
          <i class="bi bi-telephone-fill contact__icon tag"></i>
          <div>
            <h3 class="contact__title">Llamame</h3>
            <span class="contact__subtitle text-muted"> 7284-2854 </span>
          </div>
        </div>
        <div class="contact__information">
          <i class="bi bi-envelope-fill contact__icon"></i>
          <div>
            <h3 class="contact__title">Correo Electrónico</h3>
            <span class="contact__subtitle text-muted">
              william14.pineda@gmail.com
            </span>
          </div>
        </div>
        <div class="contact__information">
          <i class="bi bi-geo-alt-fill contact__icon"></i>
          <div>
            <h3 class="contact__title">Localización</h3>
            <span class="contact__subtitle text-muted">
              El Salvador - San Salvador, Ciudad Delgado
            </span>
          </div>
        </div>
      </v-col>
      <!-- Form  -->
      <v-col cols="12" sm="6" md="6">
        <form
          class="contact_form"
          action="
        "
        >
          <div class="contact__inputs">
            <div class="contact__content">
              <label for="" class="contact__label">Nombre</label>
              <input type="text" class="contact__input" />
            </div>
            <div class="contact__content">
              <label for="" class="contact__label">Correo electrónico</label>
              <input type="email" class="contact__input" />
            </div>
          </div>
          <div class="contact__content">
            <label for="" class="contact__label">Asunto</label>
            <input type="text" class="contact__input" />
          </div>
          <div class="contact__content">
            <label for="" class="contact__label">Descripción</label>
            <textarea
              name=""
              id=""
              cols="0"
              rows="7"
              class="contact__input"
            ></textarea>
          </div>
          <div>
            <a href="#" class="button"
              >Enviar mensaje <i class="bi bi-send" style="margin-left: 4px"></i
            ></a>
          </div>
        </form>
      </v-col>
    </v-row>
  </v-container>
</template>

<script>
export default {
  mounted() {},
};
</script>
