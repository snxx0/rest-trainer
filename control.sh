#!/bin/bash

recrear_datos_iniciales () {
    docker-compose build
    iniciar_contenedores
    docker-compose exec trainer-laravel php artisan migrate:fresh --seed
}

recrear_vulnerabilidades () {
    echo "Tipo 'parcial' seleccionado."
}

iniciar_contenedores () {
    docker-compose down
    docker-compose up -d
}

# Verificar si se proporciona el tipo de operacion
if [ $# -eq 0 ]; then
    echo "Error: Se debe proporcionar el tipo de operacion como argumento."
    echo "Los tipos deben ser completo (recrear todos los datos), parcial (cambiar vulnerabilidades) o continuar (ultima sesion)"
    exit 1
fi

# Tipo de operacion
OPERACION=$1

# Realiza el modo de operacion
case "$OPERACION" in
    "completo")
        recrear_datos_iniciales
        recrear_vulnerabilidades
        ;;
    "parcial")
        recrear_vulnerabilidades
        iniciar_contenedores
        ;;
    "continuar")
        iniciar_contenedores
        ;;
    *)
        echo "Tipo '$OPERACION' no reconocido"
        ;;
esac

# if [ "$MODEL_NAME" = "dummy" ]; then
#     echo "Test exitoso"
#     exit 0
# fi

# Crear el controlador Laravel
# php artisan make:controller $CONTROLLER_NAME --api

# Mensajes finales
if [ $? -eq 0 ]; then
    echo "Iniciado correctamente."
else
    echo "No se inicio correctamente: '$OPERACION'."
fi
