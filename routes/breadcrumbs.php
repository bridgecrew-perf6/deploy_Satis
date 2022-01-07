<?php
 
// Inicio publico
Breadcrumbs::for('home', function ($trail) {
  $trail->push('Inicio', route('home'));
});
 
// Inicio > Lista de empresas
Breadcrumbs::for('lista', function ($trail) {
  $trail->parent('home');
  $trail->push('Lista de empresas', route('lista'));
});

// Inicio > Iniciar sesión
Breadcrumbs::for('auth.login', function ($trail) {
  $trail->parent('home');
  $trail->push('Iniciar sesión', route('auth.login'));
});
 
// Inicio estudiantes
Breadcrumbs::for('estudiante.inicioE', function ($trail) {
  $trail->push('Inicio', route('estudiante.inicioE'));
});

// Inicio > Empresa
Breadcrumbs::for('estudiante.empresa', function ($trail) {
  $trail->parent('estudiante.inicioE');
  $trail->push('Empresa', route('estudiante.empresa'));
});

// Inicio > Empresa
Breadcrumbs::for('estudiante.sinempresa', function ($trail) {
  $trail->parent('estudiante.inicioE');
  $trail->push('Empresa', route('estudiante.sinempresa'));
});

// Inicio > Documentos base
Breadcrumbs::for('estudiante.documentosBaseView', function ($trail) {
  $trail->parent('estudiante.inicioE');
  $trail->push('Documentos base', route('estudiante.documentosBaseView'));
});

// Inicio > Lista de empresas
Breadcrumbs::for('estudiante.lista', function ($trail) {
  $trail->parent('estudiante.inicioE');
  $trail->push('Lista de empresas', route('estudiante.lista'));
});

// Inicio > Registro de empresa 
Breadcrumbs::for('fundaempresa', function ($trail) {
  $trail->parent('estudiante.inicioE');
  $trail->push('Registro de empresa', route('fundaempresa'));
});

// Inicio docentes
Breadcrumbs::for('docente.inicioD', function ($trail) {
  $trail->push('Inicio', route('docente.inicioD'));
});

// Inicio > Convocatoria
Breadcrumbs::for('docente.convocatoriasD', function ($trail) {
  $trail->parent('docente.inicioD');
  $trail->push('Convocatoria', route('docente.convocatoriasD'));
});

// Inicio > Aviso
Breadcrumbs::for('docente.avisosD', function ($trail) {
  $trail->parent('docente.inicioD');
  $trail->push('Aviso', route('docente.avisosD'));
});

// Inicio > Documentos base
Breadcrumbs::for('docente.documentosB', function ($trail) {
  $trail->parent('docente.inicioD');
  $trail->push('Documentos base', route('docente.documentosB'));
});

// Inicio > Lista de empresas
Breadcrumbs::for('docente.lista', function ($trail) {
  $trail->parent('docente.inicioD');
  $trail->push('Lista de empresas', route('docente.lista'));
});

// Inicio > Lista de empresas > Orden de cambio
Breadcrumbs::for('docente.orden', function ($trail) {
  $trail->parent('docente.lista');
  $trail->push('Orden de cambio', route('docente.orden'));
});

// Inicio > Calendario
Breadcrumbs::for('docente.calendario', function ($trail) {
  $trail->parent('docente.inicioD');
  $trail->push('Calendario', route('docente.calendario'));
});

// Inicio > Registrar estudiantes
Breadcrumbs::for('auth.register', function ($trail) {
  $trail->parent('docente.inicioD');
  $trail->push('Registrar estudiantes', route('auth.register'));
});

// Inicio administrador
Breadcrumbs::for('admin.inicioA', function ($trail) {
  $trail->push('Inicio', route('admin.inicioA'));
});

// Inicio > Lista empresas
Breadcrumbs::for('admin.lista', function ($trail) {
  $trail->parent('admin.inicioA');
  $trail->push('Lista de empresas', route('admin.lista'));
});

// Inicio > Lista docentes
Breadcrumbs::for('admin.docentes', function ($trail) {
  $trail->parent('admin.inicioA');
  $trail->push('Lista de docentes', route('admin.docentes'));
});
// Inicio > Registrar docentes
Breadcrumbs::for('auth.register2', function ($trail) {
  $trail->parent('admin.inicioA');
  $trail->push('Registrar docentes', route('auth.register2'));
});
