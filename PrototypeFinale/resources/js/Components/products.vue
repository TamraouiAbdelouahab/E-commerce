<template>
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Gestion des Produits</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Liste des Produits</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Titre</th>
                                    <th>Prix</th>
                                    <th>Stock</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="product in products">
                                    <td>{{ product.title }}</td>
                                    <td>{{ product.price }}</td>
                                    <td>{{ product.stock }}</td>
                                    <td>
                                        <button class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></button>
                                        <button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                                <!-- <tr>
                                    <td>Produit B</td>
                                    <td>15.50 €</td>
                                    <td>5</td>
                                    <td>
                                        <button class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></button>
                                        <button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr> -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</template>

<script setup>

import axios from 'axios';
import { ref, onMounted } from "vue";
let products = ref([]);
let loading = ref(true);
const fetchProducts = async () => {
  try {
    const response = await axios.get("http://127.0.0.1:8000/products");
    products.value = response.data;
  } catch (err) {
    // error.value = "Erreur lors du chargement des produits";
    // console.error(err);
  } finally {
    loading.value = false;
  }
};
onMounted(fetchProducts);




</script>