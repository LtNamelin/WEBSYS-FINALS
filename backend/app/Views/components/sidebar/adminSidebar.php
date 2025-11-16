<div class="min-w-48 mx-8 my-8 space-y-12">
    <div class="p-4 color-light-cappuccino rounded-xl shadow">
        <nav class="space-y-1 text-sm">
            <a href="/admin/dashboard" class="block py-2 px-3 rounded <?php echo $active === 'dashboard' ? 'bg-gray-100 font-medium' : 'hover:bg-gray-50'; ?>">Dashboard</a>
            <a href="/admin/accountsPage" class="block py-2 px-3 rounded <?php echo $active === 'accountsPage' ? 'bg-gray-100 font-medium' : 'hover:bg-gray-50'; ?>">Accounts</a>
            <a href="/admin/orderPage" class="block py-2 px-3 rounded <?php echo $active === 'orderPage' ? 'bg-gray-100 font-medium' : 'hover:bg-gray-50'; ?>">Orders</a>
            <a href="/admin/menuPage" class="block py-2 px-3 rounded <?php echo $active === 'menuPage' ? 'bg-gray-100 font-medium' : 'hover:bg-gray-50'; ?>">Menu Management</a>
        </nav>
    </div>
</div>