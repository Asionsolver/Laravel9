<div>
    <!-- Knowing is not enough; we must apply. Being willing is not enough; we must do. - Leonardo da Vinci -->

    <h2>{{ $title }}</h2>
    <h3>{{ $subTitle }}</h3>
    <h3>{{ $description }}</h3>
    <p>{{ $itemsNo }}</p>
    <h4>Price: {{ $addNumber(45, 665) }}</h4>

    <h6 {{ $attributes->merge(['class' => 'defaultClass']) }}>This is Component Attributes </h6>
</div>
<hr>
