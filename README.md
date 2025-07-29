# 🌍 La Geográfica - Menú Digital

> Sabores mapeados con precisión cartográfica

## 📍 Descripción

**La Geográfica** es un menú digital interactivo diseñado para integración con sistemas de automatización como n8n. Los clientes pueden explorar nuestros platos con nomenclatura geoespacial única y realizar pedidos de forma sencilla.

## 🗺️ Características

- **Diseño responsive**: Funciona perfecto en móviles y desktop
- **Carrito interactivo**: Agregar/eliminar items con facilidad
- **Integración n8n**: Envío directo de pedidos via webhook
- **Temática geográfica**: Nombres de platos únicos con terminología GIS
- **Interfaz moderna**: Gradientes, animaciones y efectos glassmorphism

## 🧭 Menú Destacado

### Platos Principales
- **Hamburguesa Gisera**: Doble medallón con papas de sizalla
- **Pollo Bufferizado**: Sándwich con coleslaw vectorial  
- **Veggie Raster Wrap**: Wrap vegetariano con aderezo NDVI

### Bebidas
- Coca-Cola, Sprite, Fanta
- Agua mineral

## 🚀 Implementación

### GitHub Pages
1. Forkear este repositorio
2. Ir a Settings → Pages
3. Seleccionar `main` branch como source
4. ¡Listo! Tu menú estará disponible en: `https://tuusuario.github.io/la-geografica-menu`

### Configuración n8n
1. Crear webhook en n8n que reciba POST
2. Reemplazar `TU_WEBHOOK_DE_N8N_ACA` en `index.html` línea 324
3. Descomentar las líneas 327-343 del fetch
4. El webhook recibirá:
```json
{
  "items": [{"name": "Hamburguesa Gisera", "price": 15500}],
  "total": 15500,
  "timestamp": "2025-07-29T...",
  "restaurant": "La Geográfica"
}
```

## 🛠️ Tecnologías

- HTML5 + CSS3 + Vanilla JavaScript
- Diseño responsive con flexbox/grid
- Animaciones CSS puras
- Compatibilidad total con GitHub Pages

## 📱 Compatibilidad

- ✅ Chrome/Chromium
- ✅ Firefox
- ✅ Safari
- ✅ Móviles Android/iOS
- ✅ Tablets

## 🤝 Contribuciones

¿Ideas para nuevos platos con terminología geográfica? ¡Abrí un issue o pull request!

## 📄 Licencia

MIT License - Usá y modificá libremente

---

*Desarrollado con coordenadas exactas y mucho amor geográfico* 🌍
