<template>
    <section>
        <Link href="/dashboard" as="button" type="button"
              class="m-4 px-6 py-2 text-white bg-gray-500 rounded-md hover:bg-gray-600">Back to Dashboard
        </Link>
        <img :src="car.picture_path" alt="Car picture" class="mx-auto my-6">
        <div class="flex ">
            <form @submit.prevent="form.put('/cars/' + car.id)" class="flex flex-col mx-auto mb-6">

                <label for="title">Title:</label>
                <p v-if="form.errors.title" class="text-red-600">{{ form.errors.title }}</p>
                <input id="title" v-model="form.title" :class="inputClassGroup"/>

                <label for="VIN_number">VIN number:</label>
                <p v-if="form.errors.VIN_number" class="text-red-600">{{ form.errors.VIN_number }}</p>
                <input id="VIN_number" v-model="form.VIN_number" :class="inputClassGroup"/>

                <label for="description">Description:</label>
                <p v-if="form.errors.description" class="text-red-600">{{ form.errors.description }}</p>
                <input id="description" v-model="form.description" :class="inputClassGroup"/>

                <label for="cars">Brand and Model:</label>
                <p v-if="form.errors.model_id" class="text-red-600">{{ form.errors.model_id }}</p>
                <select id="cars" name="cars" v-model="form.model_id" :class="inputClassGroup">
                    <option v-for="model in models"
                            :value="model.id">{{ model.brand.brand_name }} : {{ model.model_name }}
                    </option>
                </select>

                <button type="submit" :class="buttonClassGroup">Submit</button>
            </form>
        </div>
    </section>
</template>

<script>
import {Link} from "@inertiajs/inertia-vue3"

export default {
    components: {'Link': Link},
    name: "CarUpdate",
    props: ['car', 'models'],
    data() {
        return {
            form: this.$inertia.form({
                title: this.car.title,
                VIN_number: this.car.VIN_number,
                description: this.car.description,
                model_id: this.car.model_id,
            }),
            inputClassGroup: 'mb-4 px-3 py-1.5 border border-solid border-black rounded focus:border-blue-600',
            buttonClassGroup: 'px-6 py-2 text-white bg-green-500 rounded-md hover:bg-green-600',
        }
    },
}
</script>
