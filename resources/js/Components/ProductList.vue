<template>
    <div class="container py-5">
        <h1 class="text-center">Product Listing</h1>
        <div class="row">
            <div v-for="product in products" :key="product.id" class="col-md-4 mb-4">
                <div class="card">
                    <img :src="product.image" class="card-img-top" alt="Product Image">
                    <div class="card-body">
                        <h5 class="card-title">{{ product.name }}</h5>
                        <p class="card-text">{{ product.description }}</p>
                        <p class="card-text"><strong>${{ product.price }}</strong></p>
                        <a href="#" class="btn btn-primary">Buy Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            products: [
                {
                    id: 1,
                    name: 'Product 1',
                    description: 'This is product 1 description.',
                    price: 19.99,
                    image: 'https://via.placeholder.com/150',
                },
                {
                    id: 2,
                    name: 'Product 2',
                    description: 'This is product 2 description.',
                    price: 29.99,
                    image: 'https://via.placeholder.com/150',
                },
                {
                    id: 3,
                    name: 'Product 3',
                    description: 'This is product 3 description.',
                    price: 39.99,
                    image: 'https://via.placeholder.com/150',
                },
            ],
        };
    },
};
</script>
