---
pagination:
  data: iconos
  size: 1
  alias: icono
permalink: "icon/{{ icono.category | slugify }}/{{ icono.name | slugify}}/"
layout: 'base.liquid'
---

<div class="item-content grid md:grid-cols-2 gap-6">

  <a href="/images/{{ icono.category }}/{{ icono.svg }}" target="_blank" class="bg-gray-50 p-6">
    <img src="/images/{{ icono.category }}/{{ icono.png }}">
  </a>

  <div class="grid gap-2 content-start items-start justify-start">
    <h2 class="text-2xl font-semibold capitalize">{{ icono.name }}</h2>
    <span class="uppercase font-medium">CATEGORY {{icono.category}}</span>
    <a href="/images/{{ icono.category }}/{{ icono.png }}" class="rounded bg-blue-600 text-white px-6 py-3 font-medium" download>Save as PNG</a>
    <a href="/images/{{ icono.category }}/{{ icono.svg }}" class="rounded bg-blue-600 text-white px-6 py-3 font-medium" download>Save as SVG</a>
  </div>

</div>

<script>
  window.scrollTo(0, 0);
</script>