<template>
    <section>
        <div class="grid grid-cols-3 my-8">
            <div class="text-left ml-8">
                <h3>Current Page: {{ cars.current_page }}</h3>
            </div>
            <div class="text-center">
                <Link href="/car_create" as="button" type="button"
                      class="px-6 py-2 text-white bg-green-500 rounded-md hover:bg-green-600">Add New Car
                </Link>
            </div>
            <div class="text-right mr-8">
                <Link :href="cars.prev_page_url" as="button" type="button"
                      class="px-6 py-2 text-white bg-blue-500 rounded-md hover:bg-blue-600">
                    Previous Page
                </Link>
                <Link :href="cars.next_page_url" as="button" type="button"
                      class="px-6 py-2 mx-4 text-white bg-blue-500 rounded-md hover:bg-blue-600">
                    Next Page
                </Link>
            </div>
        </div>
        <CarListing :cars="cars.data" :brands="brands"/>
        <div class="grid grid-cols-2 mb-8">
            <div class="text-left ml-8">
                <h3>Current Page: {{ cars.current_page }}</h3>
            </div>
            <div class="text-right mr-8">
                <Link :href="cars.prev_page_url" class="px-6 py-2 text-white bg-blue-500 rounded-md hover:bg-blue-600">
                    Previous Page
                </Link>
                <Link :href="cars.next_page_url"
                      class="px-6 py-2 mx-4 text-white bg-blue-500 rounded-md hover:bg-blue-600">
                    Next Page
                </Link>
            </div>
        </div>
    </section>

</template>

<script>
import {Link} from "@inertiajs/inertia-vue3"
import CarListing from "../Components/CarListing.vue";

export default {
    components: {'Link': Link, 'CarListing': CarListing},
    props: ['cars', 'brands'],
}
</script>
