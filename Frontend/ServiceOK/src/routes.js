/*!

=========================================================
* Material Dashboard React - v1.9.0
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard-react
* Copyright 2020 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://github.com/creativetimofficial/material-dashboard-react/blob/master/LICENSE.md)

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

*/
// @material-ui/icons
import Dashboard from "@material-ui/icons/Dashboard";
import Person from "@material-ui/icons/Person";
import LibraryBooks from "@material-ui/icons/LibraryBooks";
import BubbleChart from "@material-ui/icons/BubbleChart";
import LocationOn from "@material-ui/icons/LocationOn";
import Notifications from "@material-ui/icons/Notifications";
import Unarchive from "@material-ui/icons/Unarchive";
import Language from "@material-ui/icons/Language";
// core components/views for Admin layout
import GestipoactividadPage from "views/Gestipoactividad/Gestipoactividad.js";
import Gestiactividad from "views/Gestiactividad/Gestiactividad.js";
import TableList from "views/TableList/TableList.js";
import Typography from "views/Typography/Typography.js";
import Consultaestaestable from "views/Consultaestaestable/Consultaestaestable.js";
import Maps from "views/Maps/Maps.js";
//importar la carpeta de graficos
import Graficos from "views/Graficos/Dashboardy.js"
import NotificationsPage from "views/Notifications/Notifications.js";
import UpgradeToPro from "views/UpgradeToPro/UpgradeToPro.js";
// core components/views for RTL layout
import RTLPage from "views/RTLPage/RTLPage.js";
import SearchBox from "react-google-maps/lib/components/places/SearchBox";

const dashboardRoutes = [
  {
    path: "/gestipoactividad",
    name: "Gestionar Tipo de Actividad",
    rtlName: "لوحة القيادة",
    icon: Dashboard,
    component: GestipoactividadPage,
    layout: "/admin"
  },
  {
    path: "/gestiactividad",
    name: "Gestionar Actividad",
    rtlName: "ملف تعريفي للمستخدم",
    icon: LibraryBooks,
    component: Gestiactividad,
    layout: "/admin"
  },
  {
    path: "/Consultaestaestable",
    name: "Gestionar Establecimiento",
    rtlName: "قائمة الجدول",
    icon: LibraryBooks,
    component: Consultaestaestable,
    layout: "/admin"
  },
  {
    path: "/maps",
    name: "Gestionar Ubicacion de Establecimiento",
    rtlName: "طباعة",
    icon: LocationOn,
    component: Maps,
    layout: "/admin"
  },
  {
    path: "/RTLPage",
    name: "Consultar Estado de Establecimiento",
    rtlName: "الرموز",
    icon: LibraryBooks,
    component: RTLPage,
    layout: "/admin"
  },
  {
    path: "/graficos",
    name: "Generar Reporte de Calificacion de Establecimiento",
    rtlName: "خرائط",
    icon: LocationOn,
    component: Graficos,
    layout: "/admin"
  },
  {
    path: "/notifications",
    name: "Notificaciones",
    rtlName: "إخطارات",
    icon: Notifications,
    component: NotificationsPage,
    layout: "/admin"
  },


];

export default dashboardRoutes;
