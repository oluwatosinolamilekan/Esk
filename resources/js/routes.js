import ListCampaign from "./components/ListCampaign";
import CreateCampaign from "./components/CreateCampaign";
import EditCampaign from "./components/EditCampaign";

export const routes = [
    {
        name: 'home',
        path: '/',
        component: ListCampaign
    },
    {
        name: 'create',
        path: '/create',
        component: CreateCampaign
    },
    {
        name: 'edit',
        path: '/edit/:id',
        component: EditCampaign
    }
];
