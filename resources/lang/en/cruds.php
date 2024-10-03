<?php

return [
    'userManagement' => [
        'title'          => 'Gestión de usuarios',
        'title_singular' => 'Gestión de usuario',
    ],
    'permission'     => [
        'title'          => 'Permisos',
        'title_singular' => 'Permiso',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'title'             => 'Título',
            'title_helper'      => '',
            'created_at'        => 'Creado el',
            'created_at_helper' => '',
            'updated_at'        => 'Actualizado el',
            'updated_at_helper' => '',
            'deleted_at'        => 'Eliminado el',
            'deleted_at_helper' => '',
        ],
    ],
    'role'           => [
        'title'          => 'Roles',
        'title_singular' => 'Rol',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => '',
            'title'              => 'Título',
            'title_helper'       => '',
            'permissions'        => 'Permisos',
            'permissions_helper' => '',
            'created_at'         => 'Creado el',
            'created_at_helper'  => '',
            'updated_at'         => 'Actualizado el',
            'updated_at_helper'  => '',
            'deleted_at'         => 'Eliminado el',
            'deleted_at_helper'  => '',
        ],
    ],
    'user'           => [
        'title'          => 'Usuarios',
        'title_singular' => 'Usuario',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => '',
            'name'                     => 'Nombre',
            'name_helper'              => '',
            'email'                    => 'Correo electrónico',
            'email_helper'             => '',
            'email_verified_at'        => 'Correo verificado el',
            'email_verified_at_helper' => '',
            'password'                 => 'Contraseña',
            'password_helper'          => '',
            'roles'                    => 'Roles',
            'roles_helper'             => '',
            'remember_token'           => 'Token de recordatorio',
            'remember_token_helper'    => '',
            'created_at'               => 'Creado el',
            'created_at_helper'        => '',
            'updated_at'               => 'Actualizado el',
            'updated_at_helper'        => '',
            'deleted_at'               => 'Eliminado el',
            'deleted_at_helper'        => '',
        ],
    ],
    'service'        => [
        'title'          => 'Servicios',
        'title_singular' => 'Servicio',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Nombre',
            'name_helper'       => '',
            'price'             => 'Precio',
            'price_helper'      => '',
            'created_at'        => 'Creado el',
            'created_at_helper' => '',
            'updated_at'        => 'Actualizado el',
            'updated_at_helper' => '',
            'deleted_at'        => 'Eliminado el',
            'deleted_at_helper' => '',
        ],
    ],
    'employee'       => [
        'title'          => 'Empleados',
        'title_singular' => 'Empleado',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Nombre',
            'name_helper'       => '',
            'email'             => 'Correo electrónico',
            'email_helper'      => '',
            'phone'             => 'Teléfono',
            'phone_helper'      => '',
            'photo'             => 'Foto',
            'photo_helper'      => '',
            'services'          => 'Servicios',
            'services_helper'   => '',
            'created_at'        => 'Creado el',
            'created_at_helper' => '',
            'updated_at'        => 'Actualizado el',
            'updated_at_helper' => '',
            'deleted_at'        => 'Eliminado el',
            'deleted_at_helper' => '',
        ],
    ],
    'client'         => [
        'title'          => 'Clientes',
        'title_singular' => 'Cliente',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Nombre',
            'name_helper'       => '',
            'phone'             => 'Teléfono',
            'phone_helper'      => '',
            'email'             => 'Correo electrónico',
            'email_helper'      => '',
            'created_at'        => 'Creado el',
            'created_at_helper' => '',
            'updated_at'        => 'Actualizado el',
            'updated_at_helper' => '',
            'deleted_at'        => 'Eliminado el',
            'deleted_at_helper' => '',
        ],
    ],
    'appointment'    => [
        'title'          => 'Citas',
        'title_singular' => 'Cita',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => '',
            'client'             => 'Cliente',
            'client_helper'      => '',
            'employee'           => 'Empleado',
            'employee_helper'    => '',
            'start_time'         => 'Hora de inicio',
            'start_time_helper'  => '',
            'finish_time'        => 'Hora de finalización',
            'finish_time_helper' => '',
            'price'              => 'Precio',
            'price_helper'       => '',
            'comments'           => 'Comentarios',
            'comments_helper'    => '',
            'services'           => 'Servicios',
            'services_helper'    => '',
            'created_at'         => 'Creado el',
            'created_at_helper'  => '',
            'updated_at'         => 'Actualizado el',
            'updated_at_helper'  => '',
            'deleted_at'         => 'Eliminado el',
            'deleted_at_helper'  => '',
        ],
    ],
];
