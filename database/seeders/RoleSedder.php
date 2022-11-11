<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSedder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $master = Role::create([ 'name' => 'Master', 'companies_id' => 1 ]);
        $admin = Role::create([ 'name' => 'Admin', 'companies_id' => 1  ]);
        $seller = Role::create([ 'name' => 'Seller', 'companies_id' => 1  ]);
        
        Permission::create([ 'level'=> 1,'name' => 'Administracion'])->syncRoles([$master]);

        Permission::create([ 'level'=> 1, 'name' => 'Listar Empresas'])->syncRoles([$master]);
        Permission::create([ 'level'=> 1, 'name' => 'Agregar Empresa'])->syncRoles([$master]);
        Permission::create([ 'level'=> 1, 'name' => 'Editar Empresa'])->syncRoles([$master]);
        Permission::create([ 'level'=> 1, 'name' => 'Mostar Empresa'])->syncRoles([$master]);
        Permission::create([ 'level'=> 1, 'name' => 'Guardar Empresa'])->syncRoles([$master]);
        Permission::create([ 'level'=> 1, 'name' => 'Actualizar Empresa'])->syncRoles([$master]);
        Permission::create([ 'level'=> 1, 'name' => 'Eliminar Empresa'])->syncRoles([$master]);

        Permission::create([ 'level'=> 1, 'name' => 'Listar Medidas'])->syncRoles([$master]);
        Permission::create([ 'level'=> 1, 'name' => 'Agregar Medida'])->syncRoles([$master]);
        Permission::create([ 'level'=> 1, 'name' => 'Editar Medida'])->syncRoles([$master]);
        Permission::create([ 'level'=> 1, 'name' => 'Mostar Medida'])->syncRoles([$master]);
        Permission::create([ 'level'=> 1, 'name' => 'Guardar Medida'])->syncRoles([$master]);
        Permission::create([ 'level'=> 1, 'name' => 'Actualizar Medida'])->syncRoles([$master]);
        Permission::create([ 'level'=> 1, 'name' => 'Eliminar Medida'])->syncRoles([$master]);

        Permission::create([ 'level'=> 1, 'name' => 'Listar Usuarios'])->syncRoles([$master]);
        Permission::create([ 'level'=> 1, 'name' => 'Agregar Usuario'])->syncRoles([$master]);
        Permission::create([ 'level'=> 1, 'name' => 'Editar Usuario'])->syncRoles([$master]);
        Permission::create([ 'level'=> 1, 'name' => 'Mostar Usuario'])->syncRoles([$master]);
        Permission::create([ 'level'=> 1, 'name' => 'Guardar Usuario'])->syncRoles([$master]);
        Permission::create([ 'level'=> 1, 'name' => 'Actualizar Usuario'])->syncRoles([$master]);
        Permission::create([ 'level'=> 1, 'name' => 'Eliminar Usuario'])->syncRoles([$master]);
        
        Permission::create([ 'level'=> 1, 'name' => 'Listar Monedas'])->syncRoles([$master]);
        Permission::create([ 'level'=> 1, 'name' => 'Agregar Moneda'])->syncRoles([$master]);
        Permission::create([ 'level'=> 1, 'name' => 'Editar Moneda'])->syncRoles([$master]);
        Permission::create([ 'level'=> 1, 'name' => 'Mostar Moneda'])->syncRoles([$master]);
        Permission::create([ 'level'=> 1, 'name' => 'Guardar Moneda'])->syncRoles([$master]);
        Permission::create([ 'level'=> 1, 'name' => 'Actualizar Moneda'])->syncRoles([$master]);
        Permission::create([ 'level'=> 1, 'name' => 'Eliminar Moneda'])->syncRoles([$master]);

        Permission::create([ 'level'=> 1, 'name' => 'Listar Metodos de pago'])->syncRoles([$master]);
        Permission::create([ 'level'=> 1, 'name' => 'Agregar Metodo de pago'])->syncRoles([$master]);
        Permission::create([ 'level'=> 1, 'name' => 'Editar Metodo de pago'])->syncRoles([$master]);
        Permission::create([ 'level'=> 1, 'name' => 'Mostar Metodo de pago'])->syncRoles([$master]);
        Permission::create([ 'level'=> 1, 'name' => 'Guardar Metodo de pago'])->syncRoles([$master]);
        Permission::create([ 'level'=> 1, 'name' => 'Actualizar Metodo de pago'])->syncRoles([$master]);
        Permission::create([ 'level'=> 1, 'name' => 'Eliminar Metodo de pago'])->syncRoles([$master]);
        
        Permission::create([ 'level'=> 1, 'name' => 'Listar Personalizaciones'])->syncRoles([$master, $admin]);
        Permission::create([ 'level'=> 1, 'name' => 'Agregar Personalizacion'])->syncRoles([$master, $admin])  ;
        Permission::create([ 'level'=> 1, 'name' => 'Editar Personalizacion'])->syncRoles([$master]);
        Permission::create([ 'level'=> 1, 'name' => 'Mostar Personalizacion'])->syncRoles([$master]);
        Permission::create([ 'level'=> 1, 'name' => 'Guardar Personalizacion'])->syncRoles([$master, $admin])   ;
        Permission::create([ 'level'=> 1, 'name' => 'Actualizar Personalizacion'])->syncRoles([$master, $admin])  ;
        Permission::create([ 'level'=> 1, 'name' => 'Eliminar Personalizacion'])->syncRoles([$master, $admin]) ;

        Permission::create([ 'level'=> 1, 'name' => 'Listar Documentos'])->syncRoles([$master]);
        Permission::create([ 'level'=> 1, 'name' => 'Agregar Documento'])->syncRoles([$master]);
        Permission::create([ 'level'=> 1, 'name' => 'Editar Documento'])->syncRoles([$master]);
        Permission::create([ 'level'=> 1, 'name' => 'Mostar Documento'])->syncRoles([$master]);
        Permission::create([ 'level'=> 1, 'name' => 'Guardar Documento'])->syncRoles([$master]);
        Permission::create([ 'level'=> 1, 'name' => 'Actualizar Documento'])->syncRoles([$master]);
        Permission::create([ 'level'=> 1, 'name' => 'Eliminar Documento'])->syncRoles([$master]);

        // ----------------------------------------------------------------------------------------------
        Permission::create([ 'level'=> 2, 'name' => 'Listar Categorias'])->syncRoles([$master, $admin]);
        Permission::create([ 'level'=> 2, 'name' => 'Agregar Categoria'])->syncRoles([$master, $admin, $seller]);
        Permission::create([ 'level'=> 2, 'name' => 'Editar Categoria'])->syncRoles([$master, $admin]);
        Permission::create([ 'level'=> 2, 'name' => 'Mostar Categoria'])->syncRoles([$master, $admin]);
        Permission::create([ 'level'=> 2, 'name' => 'Guardar Categoria'])->syncRoles([$master, $admin]);
        Permission::create([ 'level'=> 2, 'name' => 'Actualizar Categoria'])->syncRoles([$master, $admin]);
        Permission::create([ 'level'=> 2, 'name' => 'Eliminar Categoria'])->syncRoles([$master, $admin]);

        Permission::create([ 'level'=> 2, 'name' => 'Listar Marcas'])->syncRoles([$master, $admin]);
        Permission::create([ 'level'=> 2, 'name' => 'Agregar Marca'])->syncRoles([$master, $admin]);
        Permission::create([ 'level'=> 2, 'name' => 'Editar Marca'])->syncRoles([$master, $admin]);
        Permission::create([ 'level'=> 2, 'name' => 'Mostar Marca'])->syncRoles([$master, $admin]);
        Permission::create([ 'level'=> 2, 'name' => 'Guardar Marca'])->syncRoles([$master, $admin]);
        Permission::create([ 'level'=> 2, 'name' => 'Actualizar Marca'])->syncRoles([$master, $admin]);
        Permission::create([ 'level'=> 2, 'name' => 'Eliminar Marca'])->syncRoles([$master, $admin]);

        Permission::create([ 'level'=> 2, 'name' => 'Listar Proveedores'])->syncRoles([$master, $admin]);
        Permission::create([ 'level'=> 2, 'name' => 'Agregar Proveedor'])->syncRoles([$master, $admin]);
        Permission::create([ 'level'=> 2, 'name' => 'Editar Proveedor'])->syncRoles([$master, $admin]);
        Permission::create([ 'level'=> 2, 'name' => 'Mostar Proveedor'])->syncRoles([$master, $admin]);
        Permission::create([ 'level'=> 2, 'name' => 'Guardar Proveedor'])->syncRoles([$master, $admin]);
        Permission::create([ 'level'=> 2, 'name' => 'Actualizar Proveedor'])->syncRoles([$master, $admin]);
        Permission::create([ 'level'=> 2, 'name' => 'Eliminar Proveedor'])->syncRoles([$master, $admin]);

        Permission::create([ 'level'=> 2, 'name' => 'Listar Clientes'])->syncRoles([$master, $admin]);
        Permission::create([ 'level'=> 2, 'name' => 'Agregar Cliente'])->syncRoles([$master, $admin]);
        Permission::create([ 'level'=> 2, 'name' => 'Editar Cliente'])->syncRoles([$master, $admin]);
        Permission::create([ 'level'=> 2, 'name' => 'Mostar Cliente'])->syncRoles([$master, $admin]);
        Permission::create([ 'level'=> 2, 'name' => 'Guardar Cliente'])->syncRoles([$master, $admin]);
        Permission::create([ 'level'=> 2, 'name' => 'Actualizar Cliente'])->syncRoles([$master, $admin]);
        Permission::create([ 'level'=> 2, 'name' => 'Eliminar Cliente'])->syncRoles([$master, $admin]);

        Permission::create([ 'level'=> 2, 'name' => 'Listar Presentaciones'])->syncRoles([$master, $admin]);
        Permission::create([ 'level'=> 2, 'name' => 'Agregar Presentacion'])->syncRoles([$master, $admin]);
        Permission::create([ 'level'=> 2, 'name' => 'Editar Presentacion'])->syncRoles([$master, $admin]);
        Permission::create([ 'level'=> 2, 'name' => 'Mostar Presentacion'])->syncRoles([$master, $admin]);
        Permission::create([ 'level'=> 2, 'name' => 'Guardar Presentacion'])->syncRoles([$master, $admin]);
        Permission::create([ 'level'=> 2, 'name' => 'Actualizar Presentacion'])->syncRoles([$master, $admin]);
        Permission::create([ 'level'=> 2, 'name' => 'Eliminar Presentacion'])->syncRoles([$master, $admin]);

        Permission::create([ 'level'=> 2, 'name' => 'Listar Compras'])->syncRoles([$master, $admin]);
        Permission::create([ 'level'=> 2, 'name' => 'Agregar Compra'])->syncRoles([$master, $admin]);
        Permission::create([ 'level'=> 2, 'name' => 'Editar Compra'])->syncRoles([$master, $admin]);
        Permission::create([ 'level'=> 2, 'name' => 'Mostar Compra'])->syncRoles([$master, $admin]);
        Permission::create([ 'level'=> 2, 'name' => 'Guardar Compra'])->syncRoles([$master, $admin]);
        Permission::create([ 'level'=> 2, 'name' => 'Actualizar Compra'])->syncRoles([$master, $admin]);
        Permission::create([ 'level'=> 2, 'name' => 'Eliminar Compra'])->syncRoles([$master, $admin]);

        Permission::create([ 'level'=> 2, 'name' => 'Listar Ajustes'])->syncRoles([$master, $admin]);
        Permission::create([ 'level'=> 2, 'name' => 'Actualizar Ajustes'])->syncRoles([$master, $admin]);

        Permission::create([ 'level'=> 2, 'name' => 'Listar Almacenes'])->syncRoles([$master, $admin]);
        Permission::create([ 'level'=> 2, 'name' => 'Agregar Almacen'])->syncRoles([$master, $admin]);
        Permission::create([ 'level'=> 2, 'name' => 'Editar Almacen'])->syncRoles([$master, $admin]);
        Permission::create([ 'level'=> 2, 'name' => 'Mostar Almacen'])->syncRoles([$master, $admin]);
        Permission::create([ 'level'=> 2, 'name' => 'Guardar Almacen'])->syncRoles([$master, $admin]);
        Permission::create([ 'level'=> 2, 'name' => 'Actualizar Almacen'])->syncRoles([$master, $admin]);
        Permission::create([ 'level'=> 2, 'name' => 'Eliminar Almacen'])->syncRoles([$master, $admin]);

        Permission::create([ 'level'=> 2, 'name' => 'Listar Cuentas por cobrar'])->syncRoles([$master, $admin]);
        Permission::create([ 'level'=> 2, 'name' => 'Agregar Cuenta por cobrar'])->syncRoles([$master, $admin]);
        Permission::create([ 'level'=> 2, 'name' => 'Editar Cuenta por cobrar'])->syncRoles([$master, $admin]);
        Permission::create([ 'level'=> 2, 'name' => 'Mostar Cuenta por cobrar'])->syncRoles([$master, $admin]);
        Permission::create([ 'level'=> 2, 'name' => 'Guardar Cuenta por cobrar'])->syncRoles([$master, $admin]);
        Permission::create([ 'level'=> 2, 'name' => 'Actualizar Cuenta por cobrar'])->syncRoles([$master, $admin]);
        Permission::create([ 'level'=> 2, 'name' => 'Eliminar Cuenta por cobrar'])->syncRoles([$master, $admin]);

        Permission::create([ 'level'=> 2, 'name' => 'Listar Cuentas por pagar'])->syncRoles([$master, $admin]);
        Permission::create([ 'level'=> 2, 'name' => 'Agregar Cuenta por pagar'])->syncRoles([$master, $admin]);
        Permission::create([ 'level'=> 2, 'name' => 'Editar Cuenta por pagar'])->syncRoles([$master, $admin]);
        Permission::create([ 'level'=> 2, 'name' => 'Mostar Cuenta por pagar'])->syncRoles([$master, $admin]);
        Permission::create([ 'level'=> 2, 'name' => 'Guardar Cuenta por pagar'])->syncRoles([$master, $admin]);
        Permission::create([ 'level'=> 2, 'name' => 'Actualizar Cuenta por pagar'])->syncRoles([$master, $admin]);
        Permission::create([ 'level'=> 2, 'name' => 'Eliminar Cuenta por pagar'])->syncRoles([$master, $admin]);

        Permission::create([ 'level'=> 2, 'name' => 'Generador de codigo de barras'])->syncRoles([$master, $admin]);

        Permission::create([ 'level'=> 2, 'name' => 'Listar Existencias bajas'])->syncRoles([$master, $admin]);
        Permission::create([ 'level'=> 2, 'name' => 'Agregar Existencia baja'])->syncRoles([$master, $admin]);
        Permission::create([ 'level'=> 2, 'name' => 'Editar Existencia baja'])->syncRoles([$master, $admin]);
        Permission::create([ 'level'=> 2, 'name' => 'Mostar Existencia baja'])->syncRoles([$master, $admin]);
        Permission::create([ 'level'=> 2, 'name' => 'Guardar Existencia baja'])->syncRoles([$master, $admin]);
        Permission::create([ 'level'=> 2, 'name' => 'Actualizar Existencia baja'])->syncRoles([$master, $admin]);
        Permission::create([ 'level'=> 2, 'name' => 'Eliminar Existencia baja'])->syncRoles([$master, $admin]);

        Permission::create([ 'level'=> 2, 'name' => 'Listar Impresoras'])->syncRoles([$master, $admin]);
        Permission::create([ 'level'=> 2, 'name' => 'Agregar Impresora'])->syncRoles([$master, $admin]);
        Permission::create([ 'level'=> 2, 'name' => 'Editar Impresora'])->syncRoles([$master, $admin]);
        Permission::create([ 'level'=> 2, 'name' => 'Mostar Impresora'])->syncRoles([$master, $admin]);
        Permission::create([ 'level'=> 2, 'name' => 'Guardar Impresora'])->syncRoles([$master, $admin]);
        Permission::create([ 'level'=> 2, 'name' => 'Actualizar Impresora'])->syncRoles([$master, $admin]);
        Permission::create([ 'level'=> 2, 'name' => 'Eliminar Impresora'])->syncRoles([$master, $admin]);

        Permission::create([ 'level'=> 2, 'name' => 'Listar Caja general'])->syncRoles([$master, $admin]);
        Permission::create([ 'level'=> 2, 'name' => 'Agregar Caja general'])->syncRoles([$master, $admin]);
        Permission::create([ 'level'=> 2, 'name' => 'Editar Caja general'])->syncRoles([$master, $admin]);
        Permission::create([ 'level'=> 2, 'name' => 'Mostar Caja general'])->syncRoles([$master, $admin]);
        Permission::create([ 'level'=> 2, 'name' => 'Guardar Caja general'])->syncRoles([$master, $admin]);
        Permission::create([ 'level'=> 2, 'name' => 'Actualizar Caja general'])->syncRoles([$master, $admin]);
        Permission::create([ 'level'=> 2, 'name' => 'Eliminar Caja general'])->syncRoles([$master, $admin]);

        Permission::create([ 'level'=> 2, 'name' => 'Listar Caja registradora'])->syncRoles([$master, $admin]);
        Permission::create([ 'level'=> 2, 'name' => 'Agregar Caja registradora'])->syncRoles([$master, $admin]);
        Permission::create([ 'level'=> 2, 'name' => 'Editar Caja registradora'])->syncRoles([$master, $admin]);
        Permission::create([ 'level'=> 2, 'name' => 'Mostar Caja registradora'])->syncRoles([$master, $admin]);
        Permission::create([ 'level'=> 2, 'name' => 'Guardar Caja registradora'])->syncRoles([$master, $admin]);
        Permission::create([ 'level'=> 2, 'name' => 'Actualizar Caja registradora'])->syncRoles([$master, $admin]);
        Permission::create([ 'level'=> 2, 'name' => 'Eliminar Caja registradora'])->syncRoles([$master, $admin]);

        Permission::create([ 'level'=> 2, 'name' => 'Listar Reportes'])->syncRoles([$master, $admin]);

        Permission::create([ 'level'=> 2, 'name' => 'Listar Empleados'])->syncRoles([$master, $admin]);
        Permission::create([ 'level'=> 2, 'name' => 'Agregar Empleado'])->syncRoles([$master, $admin]);
        Permission::create([ 'level'=> 2, 'name' => 'Editar Empleado'])->syncRoles([$master, $admin]);
        Permission::create([ 'level'=> 2, 'name' => 'Mostar Empleado'])->syncRoles([$master, $admin]);
        Permission::create([ 'level'=> 2, 'name' => 'Guardar Empleado'])->syncRoles([$master, $admin]);
        Permission::create([ 'level'=> 2, 'name' => 'Actualizar Empleado'])->syncRoles([$master, $admin]);
        Permission::create([ 'level'=> 2, 'name' => 'Eliminar Empleado'])->syncRoles([$master, $admin]);


        
        Permission::create([ 'level'=> 2, 'name' => 'Dashboard'])->syncRoles([$master, $admin, $seller]);

        Permission::create([ 'level'=> 2, 'name' => 'Listar Productos'])->syncRoles([$master, $admin, $seller]);
        Permission::create([ 'level'=> 2, 'name' => 'Agregar Producto'])->syncRoles([$master, $admin, $seller]);
        Permission::create([ 'level'=> 2, 'name' => 'Editar Producto'])->syncRoles([$master, $admin, $seller]);
        Permission::create([ 'level'=> 2, 'name' => 'Mostar Producto'])->syncRoles([$master, $admin, $seller]);
        Permission::create([ 'level'=> 2, 'name' => 'Guardar Producto'])->syncRoles([$master, $admin, $seller]);
        Permission::create([ 'level'=> 2, 'name' => 'Actualizar Producto'])->syncRoles([$master, $admin, $seller]);
        Permission::create([ 'level'=> 2, 'name' => 'Eliminar Producto'])->syncRoles([$master, $admin, $seller]);

        Permission::create([ 'level'=> 2, 'name' => 'Listar Servicios'])->syncRoles([$master, $admin, $seller]);
        Permission::create([ 'level'=> 2, 'name' => 'Agregar Servicio'])->syncRoles([$master, $admin, $seller]);
        Permission::create([ 'level'=> 2, 'name' => 'Editar Servicio'])->syncRoles([$master, $admin, $seller]);
        Permission::create([ 'level'=> 2, 'name' => 'Mostar Servicio'])->syncRoles([$master, $admin, $seller]);
        Permission::create([ 'level'=> 2, 'name' => 'Guardar Servicio'])->syncRoles([$master, $admin, $seller]);
        Permission::create([ 'level'=> 2, 'name' => 'Actualizar Servicio'])->syncRoles([$master, $admin, $seller]);
        Permission::create([ 'level'=> 2, 'name' => 'Eliminar Servicio'])->syncRoles([$master, $admin, $seller]);

        Permission::create([ 'level'=> 2, 'name' => 'Listar Comprobantes de pagos'])->syncRoles([$master, $admin, $seller]);
        Permission::create([ 'level'=> 2, 'name' => 'Agregar Comprobante de pago'])->syncRoles([$master, $admin, $seller]);
        Permission::create([ 'level'=> 2, 'name' => 'Editar Comprobante de pago'])->syncRoles([$master, $admin, $seller]);
        Permission::create([ 'level'=> 2, 'name' => 'Mostar Comprobante de pago'])->syncRoles([$master, $admin, $seller]);
        Permission::create([ 'level'=> 2, 'name' => 'Guardar Comprobante de pago'])->syncRoles([$master, $admin, $seller]);
        Permission::create([ 'level'=> 2, 'name' => 'Actualizar Comprobante de pago'])->syncRoles([$master, $admin, $seller]);
        Permission::create([ 'level'=> 2, 'name' => 'Eliminar Comprobante de pago'])->syncRoles([$master, $admin, $seller]);

        Permission::create([ 'level'=> 2, 'name' => 'Listar Ventas'])->syncRoles([$master, $admin, $seller]);
        Permission::create([ 'level'=> 2, 'name' => 'Agregar Venta'])->syncRoles([$master, $admin, $seller]);
        Permission::create([ 'level'=> 2, 'name' => 'Editar Venta'])->syncRoles([$master, $admin, $seller]);
        Permission::create([ 'level'=> 2, 'name' => 'Mostar Venta'])->syncRoles([$master, $admin, $seller]);
        Permission::create([ 'level'=> 2, 'name' => 'Guardar Venta'])->syncRoles([$master, $admin, $seller]);
        Permission::create([ 'level'=> 2, 'name' => 'Actualizar Venta'])->syncRoles([$master, $admin, $seller]);
        Permission::create([ 'level'=> 2, 'name' => 'Eliminar Venta'])->syncRoles([$master, $admin, $seller]);

        Permission::create([ 'level'=> 2, 'name' => 'Listar Cotizaciones'])->syncRoles([$master, $admin, $seller]);
        Permission::create([ 'level'=> 2, 'name' => 'Agregar Cotizacion'])->syncRoles([$master, $admin, $seller]);
        Permission::create([ 'level'=> 2, 'name' => 'Editar Cotizacion'])->syncRoles([$master, $admin, $seller]);
        Permission::create([ 'level'=> 2, 'name' => 'Mostar Cotizacion'])->syncRoles([$master, $admin, $seller]);
        Permission::create([ 'level'=> 2, 'name' => 'Guardar Cotizacion'])->syncRoles([$master, $admin, $seller]);
        Permission::create([ 'level'=> 2, 'name' => 'Actualizar Cotizacion'])->syncRoles([$master, $admin, $seller]);
        Permission::create([ 'level'=> 2, 'name' => 'Eliminar Cotizacion'])->syncRoles([$master, $admin, $seller]);

        Permission::create([ 'level'=> 2, 'name' => 'Imprimir Venta'])->syncRoles([$master, $admin, $seller]);

        Permission::create([ 'level'=> 2, 'name' => 'Imprimir Cotizacion'])->syncRoles([$master, $admin, $seller]);

        Permission::create([ 'level'=> 2, 'name' => 'Imprimir Productos'])->syncRoles([$master, $admin, $seller]);

        Permission::create([ 'level'=> 2, 'name' => 'Exportar Productos'])->syncRoles([$master, $admin, $seller]);

        Permission::create([ 'level'=> 2, 'name' => 'Exportar Cotizacion'])->syncRoles([$master, $admin, $seller]);

        Permission::create([ 'level'=> 2, 'name' => 'Listar Roles'])->syncRoles([$master, $admin]);
        Permission::create([ 'level'=> 2, 'name' => 'Agregar Rol'])->syncRoles([$master, $admin]);
        Permission::create([ 'level'=> 2, 'name' => 'Editar Rol'])->syncRoles([$master, $admin]);
        Permission::create([ 'level'=> 2, 'name' => 'Mostar Rol'])->syncRoles([$master, $admin]);
        Permission::create([ 'level'=> 2, 'name' => 'Guardar Rol'])->syncRoles([$master, $admin]);
        Permission::create([ 'level'=> 2, 'name' => 'Actualizar Rol'])->syncRoles([$master, $admin]);
        Permission::create([ 'level'=> 2, 'name' => 'Eliminar Rol'])->syncRoles([$master, $admin]);


    }
}
