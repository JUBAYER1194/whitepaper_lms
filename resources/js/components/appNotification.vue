<template>
    <v-menu
        transition="slide-y-transition"
        nudge-bottom="50"
        nudge-width="220"
        offset-overflow
        open-on-hover

    >
        <template v-slot:activator="{ on, attrs }">
            <v-btn
                icon
                depressed
                style="background-color:#E0E0E0;color:#757575;"
                class="mr-3"
                v-bind="attrs"
                v-on="on"
            >
                <v-badge
                    color="#3b5998"
                >
                    <template v-slot:badge>0</template>
                    <v-icon>notifications</v-icon>
                </v-badge>
            </v-btn>
        </template>

        <v-list>
            <v-list-item @click="method">
                <v-list-item-title>Option 1</v-list-item-title>
            </v-list-item>
            <v-divider></v-divider>
            <v-list-item>
                <v-list-item-title>Option 2</v-list-item-title>
            </v-list-item>
        </v-list>
    </v-menu>
</template>

