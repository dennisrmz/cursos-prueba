<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Course::create([
            'title' => 'Aprende Vue 3 desde cero + inertia',
            'description' => 'Vue.js 3, es un Framework de Javascript progresivo donde podremos crear interfaces de usuario. A diferencia de otros marcos monolíticos, Vue está diseñado desde cero para ser adoptable de forma incremental. El curso se encuentra actualmente en elaboración. Si quieres adquirir el curso y llevarlo a medida que lo voy desarrollando te invito a seguir con la compra, caso contrario, puedes regresar el 20 de enero, fecha en la que calculo que el curso se encontrará culminado.',
            'category_id' => 1,
        ]);

        Course::create([
            'title' => 'Aprende a crear una plataforma de cursos con Laravel',
            'description' => 'En este curso aprenderás a diseñar una plataforma de cursos similar a la plataforma de Coders Free y para lo cual vamos a ver las últimas tecnologías que nos trae Laravel 8, como es el uso de Livewire, Alpine y Tailwind. Así mismo tocaremos temas avanzados de Laravel, que te ayudarán a mejorar tus conocimientos de Laravel. El curso no incluye el código fuente.',
            'category_id' => 1,
        ]);

        Course::create([
            'title' => 'Crea una pasarela de pagos con Laravel Cashier y Stripe',
            'description' => 'Cuando queremos iniciar un negocio por internet, el tener implementado una pasarela de pagos es casi una necesidad. En ese sentido Stripe es la pasarela de pagos más completa que existe en internet. Stripe es una pasarela que nos permite realizar tanto cobros únicos (por la venta de algún producto que ofrezcamos en nuestra web), así como cobros recurrentes (suscripciones), entre muchas otras funciones; además, de como administrar cupones de descuento, guardar métodos de pagos recurrentes, brindar un periodo de prueba, etc. Al término del curso podrán empezar a cobrar desde su sitio web, usando la pasarela de pagos Stripe. Para este curso vamos a trabajar con un paquete oficial de Laravel, llamado Laravel Cashier. Este paquete nos va a permitir poder consumir la API de Stripe de una manera muy sencilla. Sin más espero que puedan sacar el máximo provecho a este curso, y especialmente que sea de su agrado. Me despido y espero verlos en el curso.',
            'category_id' => 1,
        ]);

        Course::create([
            'title' => 'Crea un Ecommerce con Laravel, Livewire, Tailwind y Alpine',
            'description' => 'En este curso busco enseñarles a como desarrollar un Ecommerce, totalmente funcional. Veremos como implementar un carrito de pagos, vender distintos tipos de productos (Productos que necesitaremos especificar colo, talla, etc), implementar una pasarela de pagos con con Mercado Pago. Además crearemos una aplicación reactiva, para lo cual utilizaremos toda la potencia de Livewire. Sin más espero que este curso sea de su agrado, y espero verlos en el curso.',
            'category_id' => 1,
        ]);

        Course::create([
            'title' => 'Aprende a crear una API RESTful con Laravel',
            'description' => '¿Quieres construir una API RESTful, pero no sabes por dónde empezar? Has llegado al lugar adecuado, es este curso aprenderás a construir una API RESTful totalmente desde cero utilizando el framework Laravel.',
            'category_id' => 1,
        ]);

        Course::create([
            'title' => 'Aprende a generar notificaciones con Laravel',
            'description' => 'En este curso vamos a explorar el sistema de notificación en el marco web de Laravel. El sistema de notificación en Laravel te permite enviar notificaciones a los usuarios a través de diferentes canales. Durante el desarrollo de la aplicación, a menudo necesita notificar a los usuarios sobre los diferentes cambios de estado',
            'category_id' => 1,
        ]);

        Course::create([
            'title' => 'Aprende Bootstrap 5 desde cero',
            'description' => 'Con Bootstrap 5 podrás acelerar tu desarrollo web y crear páginas web adaptables a múltiples dispositivos. En este curso aprenderás a crear una página web adaptable a todos los dispositivos, utilizando Bootstrap 5. El curso incluye el código fuente de Bootstrap 5.',
            'category_id' => 1,
        ]);
    }
}
