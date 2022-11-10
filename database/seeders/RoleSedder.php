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
        $master = Role::create([ 'name' => 'Master' ]);
        $admin = Role::create([ 'name' => 'Admin' ]);
        $seller = Role::create([ 'name' => 'Seller' ]);
        
        Permission::create(['name' => 'Administracion'])->syncRoles([$master]);

        Permission::create(['name' => 'Listar Empresas'])->syncRoles([$master]);
        Permission::create(['name' => 'Agregar Empresa'])->syncRoles([$master]);
        Permission::create(['name' => 'Editar Empresa'])->syncRoles([$master]);
        Permission::create(['name' => 'Mostar Empresa'])->syncRoles([$master]);
        Permission::create(['name' => 'Guardar Empresa'])->syncRoles([$master]);
        Permission::create(['name' => 'Actualizar Empresa'])->syncRoles([$master]);
        Permission::create(['name' => 'Eliminar Empresa'])->syncRoles([$master]);

        Permission::create(['name' => 'Listar Medidas'])->syncRoles([$master]);
        Permission::create(['name' => 'Agregar Medida'])->syncRoles([$master]);
        Permission::create(['name' => 'Editar Medida'])->syncRoles([$master]);
        Permission::create(['name' => 'Mostar Medida'])->syncRoles([$master]);
        Permission::create(['name' => 'Guardar Medida'])->syncRoles([$master]);
        Permission::create(['name' => 'Actualizar Medida'])->syncRoles([$master]);
        Permission::create(['name' => 'Eliminar Medida'])->syncRoles([$master]);

        Permission::create(['name' => 'Listar Usuarios'])->syncRoles([$master]);
        Permission::create(['name' => 'Agregar Usuario'])->syncRoles([$master]);
        Permission::create(['name' => 'Editar Usuario'])->syncRoles([$master]);
        Permission::create(['name' => 'Mostar Usuario'])->syncRoles([$master]);
        Permission::create(['name' => 'Guardar Usuario'])->syncRoles([$master]);
        Permission::create(['name' => 'Actualizar Usuario'])->syncRoles([$master]);
        Permission::create(['name' => 'Eliminar Usuario'])->syncRoles([$master]);
        
        Permission::create(['name' => 'Listar Monedas'])->syncRoles([$master]);
        Permission::create(['name' => 'Agregar Moneda'])->syncRoles([$master]);
        Permission::create(['name' => 'Editar Moneda'])->syncRoles([$master]);
        Permission::create(['name' => 'Mostar Moneda'])->syncRoles([$master]);
        Permission::create(['name' => 'Guardar Moneda'])->syncRoles([$master]);
        Permission::create(['name' => 'Actualizar Moneda'])->syncRoles([$master]);
        Permission::create(['name' => 'Eliminar Moneda'])->syncRoles([$master]);

        Permission::create(['name' => 'Listar Metodos de pago'])->syncRoles([$master]);
        Permission::create(['name' => 'Agregar Metodo de pago'])->syncRoles([$master]);
        Permission::create(['name' => 'Editar Metodo de pago'])->syncRoles([$master]);
        Permission::create(['name' => 'Mostar Metodo de pago'])->syncRoles([$master]);
        Permission::create(['name' => 'Guardar Metodo de pago'])->syncRoles([$master]);
        Permission::create(['name' => 'Actualizar Metodo de pago'])->syncRoles([$master]);
        Permission::create(['name' => 'Eliminar Metodo de pago'])->syncRoles([$master]);
        
        Permission::create(['name' => 'Listar Personalizaciones'])->syncRoles([$master, $admin]);
        Permission::create(['name' => 'Agregar Personalizacion'])->syncRoles([$master, $admin])  ;
        Permission::create(['name' => 'Editar Personalizacion'])->syncRoles([$master]);
        Permission::create(['name' => 'Mostar Personalizacion'])->syncRoles([$master]);
        Permission::create(['name' => 'Guardar Personalizacion'])->syncRoles([$master, $admin])   ;
        Permission::create(['name' => 'Actualizar Personalizacion'])->syncRoles([$master, $admin])  ;
        Permission::create(['name' => 'Eliminar Personalizacion'])->syncRoles([$master, $admin]) ;

        Permission::create(['name' => 'Listar Documentos'])->syncRoles([$master]);
        Permission::create(['name' => 'Agregar Documento'])->syncRoles([$master]);
        Permission::create(['name' => 'Editar Documento'])->syncRoles([$master]);
        Permission::create(['name' => 'Mostar Documento'])->syncRoles([$master]);
        Permission::create(['name' => 'Guardar Documento'])->syncRoles([$master]);
        Permission::create(['name' => 'Actualizar Documento'])->syncRoles([$master]);
        Permission::create(['name' => 'Eliminar Documento'])->syncRoles([$master]);

        // ----------------------------------------------------------------------------------------------
        Permission::create(['name' => 'Listar Categorias'])->syncRoles([$master, $admin]);
        Permission::create(['name' => 'Agregar Categoria'])->syncRoles([$master, $admin, $seller]);
        Permission::create(['name' => 'Editar Categoria'])->syncRoles([$master, $admin]);
        Permission::create(['name' => 'Mostar Categoria'])->syncRoles([$master, $admin]);
        Permission::create(['name' => 'Guardar Categoria'])->syncRoles([$master, $admin]);
        Permission::create(['name' => 'Actualizar Categoria'])->syncRoles([$master, $admin]);
        Permission::create(['name' => 'Eliminar Categoria'])->syncRoles([$master, $admin]);

        Permission::create(['name' => 'Listar Marcas'])->syncRoles([$master, $admin]);
        Permission::create(['name' => 'Agregar Marca'])->syncRoles([$master, $admin]);
        Permission::create(['name' => 'Editar Marca'])->syncRoles([$master, $admin]);
        Permission::create(['name' => 'Mostar Marca'])->syncRoles([$master, $admin]);
        Permission::create(['name' => 'Guardar Marca'])->syncRoles([$master, $admin]);
        Permission::create(['name' => 'Actualizar Marca'])->syncRoles([$master, $admin]);
        Permission::create(['name' => 'Eliminar Marca'])->syncRoles([$master, $admin]);

        Permission::create(['name' => 'Listar Proveedores'])->syncRoles([$master, $admin]);
        Permission::create(['name' => 'Agregar Proveedor'])->syncRoles([$master, $admin]);
        Permission::create(['name' => 'Editar Proveedor'])->syncRoles([$master, $admin]);
        Permission::create(['name' => 'Mostar Proveedor'])->syncRoles([$master, $admin]);
        Permission::create(['name' => 'Guardar Proveedor'])->syncRoles([$master, $admin]);
        Permission::create(['name' => 'Actualizar Proveedor'])->syncRoles([$master, $admin]);
        Permission::create(['name' => 'Eliminar Proveedor'])->syncRoles([$master, $admin]);

        Permission::create(['name' => 'Listar Clientes'])->syncRoles([$master, $admin]);
        Permission::create(['name' => 'Agregar Cliente'])->syncRoles([$master, $admin]);
        Permission::create(['name' => 'Editar Cliente'])->syncRoles([$master, $admin]);
        Permission::create(['name' => 'Mostar Cliente'])->syncRoles([$master, $admin]);
        Permission::create(['name' => 'Guardar Cliente'])->syncRoles([$master, $admin]);
        Permission::create(['name' => 'Actualizar Cliente'])->syncRoles([$master, $admin]);
        Permission::create(['name' => 'Eliminar Cliente'])->syncRoles([$master, $admin]);

        Permission::create(['name' => 'Listar Presentaciones'])->syncRoles([$master, $admin]);
        Permission::create(['name' => 'Agregar Presentacion'])->syncRoles([$master, $admin]);
        Permission::create(['name' => 'Editar Presentacion'])->syncRoles([$master, $admin]);
        Permission::create(['name' => 'Mostar Presentacion'])->syncRoles([$master, $admin]);
        Permission::create(['name' => 'Guardar Presentacion'])->syncRoles([$master, $admin]);
        Permission::create(['name' => 'Actualizar Presentacion'])->syncRoles([$master, $admin]);
        Permission::create(['name' => 'Eliminar Presentacion'])->syncRoles([$master, $admin]);

        Permission::create(['name' => 'Listar Compras'])->syncRoles([$master, $admin]);
        Permission::create(['name' => 'Agregar Compra'])->syncRoles([$master, $admin]);
        Permission::create(['name' => 'Editar Compra'])->syncRoles([$master, $admin]);
        Permission::create(['name' => 'Mostar Compra'])->syncRoles([$master, $admin]);
        Permission::create(['name' => 'Guardar Compra'])->syncRoles([$master, $admin]);
        Permission::create(['name' => 'Actualizar Compra'])->syncRoles([$master, $admin]);
        Permission::create(['name' => 'Eliminar Compra'])->syncRoles([$master, $admin]);

        Permission::create(['name' => 'Listar Ajustes'])->syncRoles([$master, $admin]);
        Permission::create(['name' => 'Actualizar Ajustes'])->syncRoles([$master, $admin]);

        Permission::create(['name' => 'Listar Almacenes'])->syncRoles([$master, $admin]);
        Permission::create(['name' => 'Agregar Almacen'])->syncRoles([$master, $admin]);
        Permission::create(['name' => 'Editar Almacen'])->syncRoles([$master, $admin]);
        Permission::create(['name' => 'Mostar Almacen'])->syncRoles([$master, $admin]);
        Permission::create(['name' => 'Guardar Almacen'])->syncRoles([$master, $admin]);
        Permission::create(['name' => 'Actualizar Almacen'])->syncRoles([$master, $admin]);
        Permission::create(['name' => 'Eliminar Almacen'])->syncRoles([$master, $admin]);

        Permission::create(['name' => 'Listar Cuentas por cobrar'])->syncRoles([$master, $admin]);
        Permission::create(['name' => 'Agregar Cuenta por cobrar'])->syncRoles([$master, $admin]);
        Permission::create(['name' => 'Editar Cuenta por cobrar'])->syncRoles([$master, $admin]);
        Permission::create(['name' => 'Mostar Cuenta por cobrar'])->syncRoles([$master, $admin]);
        Permission::create(['name' => 'Guardar Cuenta por cobrar'])->syncRoles([$master, $admin]);
        Permission::create(['name' => 'Actualizar Cuenta por cobrar'])->syncRoles([$master, $admin]);
        Permission::create(['name' => 'Eliminar Cuenta por cobrar'])->syncRoles([$master, $admin]);

        Permission::create(['name' => 'Listar Cuentas por pagar'])->syncRoles([$master, $admin]);
        Permission::create(['name' => 'Agregar Cuenta por pagar'])->syncRoles([$master, $admin]);
        Permission::create(['name' => 'Editar Cuenta por pagar'])->syncRoles([$master, $admin]);
        Permission::create(['name' => 'Mostar Cuenta por pagar'])->syncRoles([$master, $admin]);
        Permission::create(['name' => 'Guardar Cuenta por pagar'])->syncRoles([$master, $admin]);
        Permission::create(['name' => 'Actualizar Cuenta por pagar'])->syncRoles([$master, $admin]);
        Permission::create(['name' => 'Eliminar Cuenta por pagar'])->syncRoles([$master, $admin]);

        Permission::create(['name' => 'Generador de codigo de barras'])->syncRoles([$master, $admin]);

        Permission::create(['name' => 'Listar Existencias bajas'])->syncRoles([$master, $admin]);
        Permission::create(['name' => 'Agregar Existencia baja'])->syncRoles([$master, $admin]);
        Permission::create(['name' => 'Editar Existencia baja'])->syncRoles([$master, $admin]);
        Permission::create(['name' => 'Mostar Existencia baja'])->syncRoles([$master, $admin]);
        Permission::create(['name' => 'Guardar Existencia baja'])->syncRoles([$master, $admin]);
        Permission::create(['name' => 'Actualizar Existencia baja'])->syncRoles([$master, $admin]);
        Permission::create(['name' => 'Eliminar Existencia baja'])->syncRoles([$master, $admin]);

        Permission::create(['name' => 'Listar Impresoras'])->syncRoles([$master, $admin]);
        Permission::create(['name' => 'Agregar Impresora'])->syncRoles([$master, $admin]);
        Permission::create(['name' => 'Editar Impresora'])->syncRoles([$master, $admin]);
        Permission::create(['name' => 'Mostar Impresora'])->syncRoles([$master, $admin]);
        Permission::create(['name' => 'Guardar Impresora'])->syncRoles([$master, $admin]);
        Permission::create(['name' => 'Actualizar Impresora'])->syncRoles([$master, $admin]);
        Permission::create(['name' => 'Eliminar Impresora'])->syncRoles([$master, $admin]);

        Permission::create(['name' => 'Listar Caja general'])->syncRoles([$master, $admin]);
        Permission::create(['name' => 'Agregar Caja general'])->syncRoles([$master, $admin]);
        Permission::create(['name' => 'Editar Caja general'])->syncRoles([$master, $admin]);
        Permission::create(['name' => 'Mostar Caja general'])->syncRoles([$master, $admin]);
        Permission::create(['name' => 'Guardar Caja general'])->syncRoles([$master, $admin]);
        Permission::create(['name' => 'Actualizar Caja general'])->syncRoles([$master, $admin]);
        Permission::create(['name' => 'Eliminar Caja general'])->syncRoles([$master, $admin]);

        Permission::create(['name' => 'Listar Caja registradora'])->syncRoles([$master, $admin]);
        Permission::create(['name' => 'Agregar Caja registradora'])->syncRoles([$master, $admin]);
        Permission::create(['name' => 'Editar Caja registradora'])->syncRoles([$master, $admin]);
        Permission::create(['name' => 'Mostar Caja registradora'])->syncRoles([$master, $admin]);
        Permission::create(['name' => 'Guardar Caja registradora'])->syncRoles([$master, $admin]);
        Permission::create(['name' => 'Actualizar Caja registradora'])->syncRoles([$master, $admin]);
        Permission::create(['name' => 'Eliminar Caja registradora'])->syncRoles([$master, $admin]);

        Permission::create(['name' => 'Listar Reportes'])->syncRoles([$master, $admin]);

        Permission::create(['name' => 'Listar Empleados'])->syncRoles([$master, $admin]);
        Permission::create(['name' => 'Agregar Empleado'])->syncRoles([$master, $admin]);
        Permission::create(['name' => 'Editar Empleado'])->syncRoles([$master, $admin]);
        Permission::create(['name' => 'Mostar Empleado'])->syncRoles([$master, $admin]);
        Permission::create(['name' => 'Guardar Empleado'])->syncRoles([$master, $admin]);
        Permission::create(['name' => 'Actualizar Empleado'])->syncRoles([$master, $admin]);
        Permission::create(['name' => 'Eliminar Empleado'])->syncRoles([$master, $admin]);


        
        Permission::create(['name' => 'Dashboard'])->syncRoles([$master, $admin, $seller]);

        Permission::create(['name' => 'Listar Productos'])->syncRoles([$master, $admin, $seller]);
        Permission::create(['name' => 'Agregar Producto'])->syncRoles([$master, $admin, $seller]);
        Permission::create(['name' => 'Editar Producto'])->syncRoles([$master, $admin, $seller]);
        Permission::create(['name' => 'Mostar Producto'])->syncRoles([$master, $admin, $seller]);
        Permission::create(['name' => 'Guardar Producto'])->syncRoles([$master, $admin, $seller]);
        Permission::create(['name' => 'Actualizar Producto'])->syncRoles([$master, $admin, $seller]);
        Permission::create(['name' => 'Eliminar Producto'])->syncRoles([$master, $admin, $seller]);

        Permission::create(['name' => 'Listar Servicios'])->syncRoles([$master, $admin, $seller]);
        Permission::create(['name' => 'Agregar Servicio'])->syncRoles([$master, $admin, $seller]);
        Permission::create(['name' => 'Editar Servicio'])->syncRoles([$master, $admin, $seller]);
        Permission::create(['name' => 'Mostar Servicio'])->syncRoles([$master, $admin, $seller]);
        Permission::create(['name' => 'Guardar Servicio'])->syncRoles([$master, $admin, $seller]);
        Permission::create(['name' => 'Actualizar Servicio'])->syncRoles([$master, $admin, $seller]);
        Permission::create(['name' => 'Eliminar Servicio'])->syncRoles([$master, $admin, $seller]);

        Permission::create(['name' => 'Listar Comprobantes de pagos'])->syncRoles([$master, $admin, $seller]);
        Permission::create(['name' => 'Agregar Comprobante de pago'])->syncRoles([$master, $admin, $seller]);
        Permission::create(['name' => 'Editar Comprobante de pago'])->syncRoles([$master, $admin, $seller]);
        Permission::create(['name' => 'Mostar Comprobante de pago'])->syncRoles([$master, $admin, $seller]);
        Permission::create(['name' => 'Guardar Comprobante de pago'])->syncRoles([$master, $admin, $seller]);
        Permission::create(['name' => 'Actualizar Comprobante de pago'])->syncRoles([$master, $admin, $seller]);
        Permission::create(['name' => 'Eliminar Comprobante de pago'])->syncRoles([$master, $admin, $seller]);

        Permission::create(['name' => 'Listar Ventas'])->syncRoles([$master, $admin, $seller]);
        Permission::create(['name' => 'Agregar Venta'])->syncRoles([$master, $admin, $seller]);
        Permission::create(['name' => 'Editar Venta'])->syncRoles([$master, $admin, $seller]);
        Permission::create(['name' => 'Mostar Venta'])->syncRoles([$master, $admin, $seller]);
        Permission::create(['name' => 'Guardar Venta'])->syncRoles([$master, $admin, $seller]);
        Permission::create(['name' => 'Actualizar Venta'])->syncRoles([$master, $admin, $seller]);
        Permission::create(['name' => 'Eliminar Venta'])->syncRoles([$master, $admin, $seller]);

        Permission::create(['name' => 'Listar Cotizaciones'])->syncRoles([$master, $admin, $seller]);
        Permission::create(['name' => 'Agregar Cotizacion'])->syncRoles([$master, $admin, $seller]);
        Permission::create(['name' => 'Editar Cotizacion'])->syncRoles([$master, $admin, $seller]);
        Permission::create(['name' => 'Mostar Cotizacion'])->syncRoles([$master, $admin, $seller]);
        Permission::create(['name' => 'Guardar Cotizacion'])->syncRoles([$master, $admin, $seller]);
        Permission::create(['name' => 'Actualizar Cotizacion'])->syncRoles([$master, $admin, $seller]);
        Permission::create(['name' => 'Eliminar Cotizacion'])->syncRoles([$master, $admin, $seller]);

        Permission::create(['name' => 'Imprimir Venta'])->syncRoles([$master, $admin, $seller]);

        Permission::create(['name' => 'Imprimir Cotizacion'])->syncRoles([$master, $admin, $seller]);

        Permission::create(['name' => 'Imprimir Productos'])->syncRoles([$master, $admin, $seller]);

        Permission::create(['name' => 'Exportar Productos'])->syncRoles([$master, $admin, $seller]);

        Permission::create(['name' => 'Exportar Cotizacion'])->syncRoles([$master, $admin, $seller]);


    }
}
