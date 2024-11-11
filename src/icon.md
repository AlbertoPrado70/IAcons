---
pagination:
  data: iconos
  size: 1
  alias: icono
permalink: "icon/{{ icono.category | slugify }}/{{ icono.name | slugify}}/"
layout: 'base.liquid'
---

<div class="item-content grid grid-cols-2 gap-6">

  <a href="/images/{{ icono.category }}/{{ icono.svg }}" target="_blank" class="bg-gray-50 p-6">
    <img src="/images/{{ icono.category }}/{{ icono.svg }}">
  </a>

  <div class="grid gap-2 content-start items-start">
    <h2 class="text-2xl font-semibold capitalize">{{ icono.name }}</h2>
    <span class="uppercase font-medium">{{icono.category}}</span>
    <a href="/images/{{ icono.category }}/{{ icono.png }}" class="rounded bg-slate-200 text-slate-800 p-6">Save as PNG</a>
    <a href="/images/{{ icono.category }}/{{ icono.svg }}">Save as SVG</a>
  </div>

</div>

<script>
  window.scrollTo(0, 0);
</script>