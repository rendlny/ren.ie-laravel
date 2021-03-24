<template>
    <div class="itemListContainer w-300">
        <div class="heading">
            <h2 id="title">Item List</h2>
            <item-add-form/>

        </div>
        <item-list>
    </div>
</template>

<script>
import item_add from './ItemAddForm'
import ItemList from './ItemList'

export default {
    components: { 
        ItemAddForm,
        ItemList
    },
}
</script>
