<template>
    <v-container fluid>
        <v-row >
            <v-col class="d-flex" cols="12" sm="6" >
                <v-file-input label="Upload the Question"></v-file-input>

            </v-col>
            <v-col  class="d-flex" cols="12" sm="6">
                <v-select
                    :items="items"
                    label="Select Question type"
                ></v-select>
            </v-col>
        </v-row>
    </v-container>
</template>
<script>
    export default {
        data: () => ({
            items: ['Creative Question', 'Multiple Choice Question'],
        }),
    }
</script>
