<template>
<div>
    Task Index


    <div v-if="tasks" class="mt-4 -mb-3"><div class="not-prose relative bg-slate-50 rounded-xl overflow-hidden"><div class="absolute inset-0 bg-grid-slate-100 [mask-image:linear-gradient(0deg,#fff,rgba(255,255,255,0.6))]" style="background-position: 10px 10px;"></div><div class="relative rounded-xl overflow-auto">
        <div class="shadow-sm overflow-hidden my-8">
            <table class="border-collapse table-auto w-full text-sm">
                <thead>
                <tr>
                    <th class="border-b font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 text-left">ID</th>
                    <th class="border-b font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 text-left">User</th>
                    <th class="border-b font-medium p-4 pt-0 pb-3 text-slate-400 text-left">File</th>
                    <th class="border-b font-medium p-4 pr-8 pt-0 pb-3 text-slate-400 text-left">Status</th>
                    <th class="border-b font-medium p-4 pr-8 pt-0 pb-3 text-slate-400 text-left">Failed Rows</th>
                </tr>
                </thead>
                <tbody class="bg-white">
                <tr v-for="task in tasks.data">
                    <td class="border-b border-slate-100 p-4 pl-8 text-slate-500">{{ task.id }}</td>
                    <td class="border-b border-slate-100 p-4 pl-8 text-slate-500">{{ task.user.name }}</td>
                    <td class="border-b border-slate-100 p-4 text-slate-500">{{ task.file.path }}</td>
                    <td class="border-b border-slate-100 p-4 pr-8 text-slate-500">{{ task.status }}</td>
                    <td class="border-b border-slate-100 p-4 pr-8 text-slate-500">
                        <Link v-if="task.failed_rows_count > 0" class="text-sky-500" :href="route('task.failed_list', task.id)">Failed Rows</Link>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div><div class="absolute inset-0 pointer-events-none border border-black/5 rounded-xl"></div></div></div>
    <div>
        <pagination :meta="tasks.meta"></pagination>
    </div>
</div>
</template>

<script>
import MainLayout from "@/Layouts/MainLayout.vue";
import {Link} from '@inertiajs/vue3'
import Pagination from "@/Components/Pagination.vue";

export default {
    name: "Index",
    layout: MainLayout,

    components: {
        Link,
        Pagination

    },

    props: [
        'tasks'
    ]
}
</script>

<style scoped>

</style>
