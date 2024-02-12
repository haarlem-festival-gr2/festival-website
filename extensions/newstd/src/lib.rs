use ext_php_rs::{info_table_end, info_table_row, info_table_start, prelude::*, zend::ModuleEntry};
use php_tokio::{php_async_impl, EventLoop};

#[php_function]
pub fn hello_world(name: &str) -> String {
    format!("Hello {} from rust!", name)
}

#[php_class]
struct Std;

#[php_async_impl]
impl Std {
    pub fn init() -> PhpResult<u64> {
        EventLoop::init()
    }
}

pub extern "C" fn php_module_info(_module: *mut ModuleEntry) {
    info_table_start!();
    info_table_row!("newstd", "enabled");
    info_table_end!();
}

#[php_module]
pub fn get_module(module: ModuleBuilder) -> ModuleBuilder {
    module.info_function(php_module_info)
}
