---
pagination:
  data: iconos
  size: 1
  alias: icono
permalink: "icon/{{ icono.category | slugify }}/{{ icono.name | slugify}}/"
---

<h1> Icono {{ icono.name }} </h1>

<img src="/images/{{ icono.category}}/{{ icono.svg }}">