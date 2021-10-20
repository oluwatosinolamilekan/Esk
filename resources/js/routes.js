import ListCampaign from "./components/ListCampaign";
import CreateCampaign from "./components/CreateCampaign";

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
];
