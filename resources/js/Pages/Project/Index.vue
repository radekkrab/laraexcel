<template>
    <div>
        Index

        <div>
            <Link class="text-sm" :href="route('task.index')">Back</Link>
        </div>
        <div v-if="projects" class="mt-4 -mb-3">
            <div class="not-prose relative bg-slate-50 rounded-xl overflow-hidden">
                <div
                    class="absolute inset-0 bg-grid-slate-100 [mask-image:linear-gradient(0deg,#fff,rgba(255,255,255,0.6))]"
                    style="background-position: 10px 10px;"></div>
                <div class="relative rounded-xl overflow-auto">
                    <div class="shadow-sm overflow-auto my-8">
                        <table class="border-collapse table-auto w-full text-sm">
                            <thead>
                            <tr>
                                <th class="border-b font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 text-left">
                                    Id
                                </th>
                                <th class="border-b font-medium p-4 pt-0 pb-3 text-slate-400 text-left">
                                    Type
                                </th>
                                <th class="border-b font-medium p-4 pt-0 pb-3 text-slate-400 text-left">
                                    Title
                                </th>
                                <th class="border-b font-medium p-4 pr-8 pt-0 pb-3 text-slate-400 text-left">
                                    Created_at_time
                                </th>
                                <th class="border-b font-medium p-4 pr-8 pt-0 pb-3 text-slate-400 text-left">
                                    Contracted_at
                                </th>
                                <th class="border-b font-medium p-4 pr-8 pt-0 pb-3 text-slate-400 text-left">
                                    Deadline
                                </th>
                                <th class="border-b font-medium p-4 pt-0 pb-3 text-slate-400 text-left">
                                    Is_chain
                                </th>
                                <th class="border-b font-medium p-4 pr-8 pt-0 pb-3 text-slate-400 text-left">
                                    Is_on_time
                                </th>
                                <th class="border-b font-medium p-4 pr-8 pt-0 pb-3 text-slate-400 text-left">
                                    Has_outsource
                                </th>
                                <th class="border-b font-medium p-4 pr-8 pt-0 pb-3 text-slate-400 text-left">
                                    Has_investors
                                </th>
                                <th class="border-b font-medium p-4 pr-8 pt-0 pb-3 text-slate-400 text-left">
                                    Worker_count
                                </th>
                                <th class="border-b font-medium p-4 pr-8 pt-0 pb-3 text-slate-400 text-left">
                                    Service_count
                                </th>
                            </tr>
                            </thead>
                            <tbody class="bg-white">
                            <tr v-for="project in projects.data">
                                <td class="border-b border-slate-100 p-4 pl-8 text-slate-500">
                                    {{ project.id }}
                                </td>
                                <td class="border-b border-slate-100 p-4 pr-8 text-slate-500">
                                    {{ project.type.title }}
                                </td>
                                <td class="border-b border-slate-100 p-4 pr-8 text-slate-500">
                                    {{ project.title }}
                                </td>
                                <td class="border-b border-slate-100 p-4 text-slate-500">
                                    {{ project.created_at_time }}
                                </td>
                                <td class="border-b border-slate-100 p-4 pr-8 text-slate-500">
                                    {{ project.contracted_at }}
                                </td>
                                <td class="border-b border-slate-100 p-4 pr-8 text-slate-500">
                                    {{ project.deadline }}
                                </td>
                                <td class="border-b border-slate-100 p-4 pl-8 text-slate-500">
                                    {{ project.is_chain }}
                                </td>
                                <td class="border-b border-slate-100 p-4 pr-8 text-slate-500">
                                    {{ project.is_on_time }}
                                </td>
                                <td class="border-b border-slate-100 p-4 pr-8 text-slate-500">
                                    {{ project.has_outsource }}
                                </td>
                                <td class="border-b border-slate-100 p-4 text-slate-500">
                                    {{ project.has_investors }}
                                </td>
                                <td class="border-b border-slate-100 p-4 pr-8 text-slate-500">
                                    {{ project.worker_count }}
                                </td>
                                <td class="border-b border-slate-100 p-4 pr-8 text-slate-500">
                                    {{ project.service_count }}
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div
                    class="absolute inset-0 pointer-events-none border border-black/5 rounded-xl"></div>
            </div>
        </div>
        <div>
            <pagination :meta="projects.meta"></pagination>
        </div>
    </div>
</template>

<script>
import MainLayout from "@/Layouts/MainLayout.vue";
import Pagination from "@/Components/Pagination.vue";

export default {
    name: "Index",

    layout: MainLayout,

    props: [
        'projects'
    ],

    components: {
        Pagination
    }
}
</script>

<style scoped>

</style>
