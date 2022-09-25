<template>
    <section>
        <div v-for="car in cars">
            <div class="grid grid-cols-3 m-6 border-4 border-sky-500 rounded-md">
                <img :src="car.picture_path" alt="Car picture" class="p-2">
                <div class="text-center">
                    <h3>Number: {{ car.id }}</h3>
                    <h3>Brand: {{ brands[car.model.brand_id - 1].brand_name }}</h3>
                    <h3>Model: {{ car.model.model_name }}</h3>
                    <h3>Title: {{ car.title }}</h3>
                    <h3>VIN_Number: {{ car.VIN_number }}</h3>
                    <h3>Description: {{ car.description }}</h3>
                </div>
                <div class="m-auto">
                    <div class="mb-4">
                        <Link :href="carDeleteLink + car.id" as="button" type="button" method="delete"
                              class="px-6 py-2 text-white bg-red-500 rounded-md hover:bg-red-600">Delete Car
                        </Link>
                    </div>
                    <div>
                        <Link :href="carUpdateLink + car.id" as="button" type="button"
                              class="px-6 py-2 text-white bg-gray-500 rounded-md hover:bg-gray-600">Change Car Info
                        </Link>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
import {Link} from "@inertiajs/inertia-vue3"

export default {
    components: {'Link': Link},
    name: "CarListing",
    props: ['cars', 'brands'],
    data() {
        return {
            carUpdateLink: "/car_update/",
            carDeleteLink: "/cars/"
        }
    },
}
</script>
