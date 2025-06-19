# Visual Analytics de Datos Epidemiológicos: Exploración Espacio-Temporal de Brotes Pandémicos (COVID-19)

## Descripción del Proyecto
Este proyecto desarrolla un **framework de Visual Analytics** para la exploración interactiva espacio-temporal de brotes pandémicos, con enfoque exclusivo en la pandemia de COVID-19.

El sistema permite visualizar la evolución de casos y muertes confirmadas por país, organizados jerárquicamente por continentes y regiones, con control multirresolución y exploración detallada de los datos.

---

## Objetivo del Segundo Avance
El segundo avance presenta:
- La **integración de múltiples métricas epidemiológicas**.
- La visualización jerárquica multiescalar.
- El desarrollo de controles interactivos de tiempo y detalle.
- La visualización dinámica de series temporales.

---

## Características Implementadas

### 1. Selector de Dataset Interactivo
El usuario puede seleccionar entre las siguientes métricas:
- Casos confirmados totales.
- Nuevos casos confirmados.
- Nuevos casos confirmados suavizados.
- Casos confirmados por millón.
- Nuevos casos confirmados por millón.
- Nuevos casos confirmados suavizados por millón.
- Total de muertes.
- Nuevas muertes.
- Nuevas muertes suavizadas.
- Muertes por millón.
- Nuevas muertes por millón.
- Nuevas muertes suavizadas por millón.

### 2. Visualización Jerárquica
- Organización de datos por **Continente → Región → País**.
- Estructura jerárquica navegable para análisis geográfico detallado.

### 3. Visualización Temporal Interactiva
- Gráfico de flujo multirresolución que permite:
  - Ajustar áreas de contexto y detalle.
  - Cambiar dinámicamente el rango de fechas mediante **barras interactivas (brushing)**.
- Visualización enfocada por defecto en el **país con mayor número de casos o muertes**.
- Al pasar el cursor sobre una serie temporal de un país, se muestra un **tooltip con los datos específicos** (valor exacto y fecha).

### 4. Controlador de Tiempo Interactivo
- Barras interactivas en la parte inferior permiten seleccionar el **rango de fechas de análisis** de forma precisa.
- Actualización automática del gráfico al modificar el rango seleccionado.

### 5. Actualización Dinámica
- El nombre y descripción del dataset seleccionado se actualizan de manera automática.
- Los datos se cargan desde archivos JSON específicos para cada métrica.

---

## Comparativas y Personalizaciones al Método Seleccionado

| Elemento                             | Estado Base            | Personalización Realizada                        |
|-------------------------------------|------------------------|--------------------------------------------------|
| Dataset                             | Disponible             | Datos COVID-19 por casos y muertes               |
| Jerarquía                           | Implementada           | Continente → Región → País                       |
| Controlador Multirresolución        | Implementado           | Barra interactiva de selección temporal          |
| Métricas                            | Disponible             | Casos, muertes y tasas por millón                |
| Interactividad                      | Implementada           | Menú desplegable, brushing, tooltips             |
| Datos detallados por serie temporal | Implementado           | Cuadros emergentes al pasar el cursor (tooltips) |
| Enfoque automático                  | Implementado           | Foco inicial en el país con mayor valor          |
| Descripción dinámica                | Implementada           | Nombre y descripción se actualizan automáticamente |

---

## Evidencias del Segundo Avance

### Captura de Pantalla
![image](https://github.com/user-attachments/assets/ae962e89-8a3f-42e7-95d0-b021be600718)
![image](https://github.com/user-attachments/assets/8547aff6-cc43-4eeb-bcdc-2bb9ea69cb0d)
![image](https://github.com/user-attachments/assets/461c1dfb-c12f-4c4f-a9cc-22d564b1f8b1)
![image](https://github.com/user-attachments/assets/d8155f0c-b8d3-4132-ba6c-5e10387132a9)
![image](https://github.com/user-attachments/assets/5d43a706-c93c-4d31-9788-02e802214d9e)


**Evidencias disponibles:**
- Menú interactivo para seleccionar datasets COVID-19.
- Visualización temporal diferenciada por país.
- Estructura jerárquica geográfica completa.
- Control multirresolución con barras de selección de fechas.
- Tooltip interactivo con datos específicos por país y fecha.
- Visualización enfocada por defecto en el país con mayor cantidad de casos/muertes.

---

## Próximos Pasos
- Mejorar las animaciones al cambiar niveles jerárquicos.
- Agregar funcionalidades de agregación y desagregación controladas desde la jerarquía.
- Incluir métricas adicionales como tasas de vacunación y hospitalización.
- Optimizar el rendimiento para datasets de mayor tamaño y mayor granularidad.

---

## Autor
Este proyecto es desarrollado como parte de un trabajo de tesis en el área de **Visual Analytics de Datos Epidemiológicos**.

---
