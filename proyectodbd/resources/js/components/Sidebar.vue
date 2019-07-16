<template>
    <div id="app" ref="app">
        <slider :width="300" format="push" direction="left" :opacity="0.15" :links="[
        {'id': 1, 'text': 'Cuenta', 'url': 'cuenta/{{id}}'}, 
        {'id': 2, 'text': 'Horario', 'url': 'horario'},
        {'id': 3, 'text': 'Asignaturas','url': 'asignaturas'},
        {'id': 4, 'text': 'Pagos', 'url': 'pagos'}, 
        {'id': 5, 'text': 'Documentos', 'url': 'documentos'}]">
        </slider>
    </div>
</template>

<script>
import Slider from '@jeremyhamm/vue-slider'
export default {
  components: {
    'slider': Slider
  }
}
</script>

<style scoped>
.navMenu
{
    background-color: #002F6C;
}
.slider
{
    background-color: #002F6C;
}
div.navMenu{
    background-color: #002F6C;
}
</style>






